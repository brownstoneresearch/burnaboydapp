'use client';
import { useState } from 'react';
import { useAccount, useContractRead, useContractWrite, usePrepareContractWrite } from 'wagmi';
import { parseEther, formatEther } from 'viem';

const tokenAddress = '0x00b8a9bb1dcab2cf2375284d70b39e6ef7d86aae';
const stakingAddress = '0x0000000000000000000000000000000000000000'; // Replace

const erc20ABI = [{
  "name": "approve", "type": "function", "stateMutability": "nonpayable",
  "inputs": [
    { "name": "spender", "type": "address" },
    { "name": "amount", "type": "uint256" }
  ],
  "outputs": [ { "name": "", "type": "bool" } ]
}];

const stakingABI = [
  { "name": "stake", "type": "function", "inputs": [{ "name": "amount", "type": "uint256" }], "outputs": [], "stateMutability": "nonpayable" },
  { "name": "unstake", "type": "function", "inputs": [], "outputs": [], "stateMutability": "nonpayable" },
  { "name": "getStaked", "type": "function", "inputs": [{ "name": "user", "type": "address" }], "outputs": [{ "name": "", "type": "uint256" }], "stateMutability": "view" }
];

export default function StakingPanel() {
  const [amount, setAmount] = useState('');
  const { address } = useAccount();

  const { data: staked } = useContractRead({
    address: stakingAddress,
    abi: stakingABI,
    functionName: 'getStaked',
    args: [address],
    watch: true
  });

  const { config: approveCfg } = usePrepareContractWrite({
    address: tokenAddress,
    abi: erc20ABI,
    functionName: 'approve',
    args: [stakingAddress, parseEther(amount || '0')],
    enabled: Boolean(amount)
  });

  const { config: stakeCfg } = usePrepareContractWrite({
    address: stakingAddress,
    abi: stakingABI,
    functionName: 'stake',
    args: [parseEther(amount || '0')],
    enabled: Boolean(amount)
  });

  const { config: unstakeCfg } = usePrepareContractWrite({
    address: stakingAddress,
    abi: stakingABI,
    functionName: 'unstake'
  });

  const { write: approve } = useContractWrite(approveCfg);
  const { write: stake } = useContractWrite(stakeCfg);
  const { write: unstake } = useContractWrite(unstakeCfg);

  return (
    <div>
      <h3>Staking</h3>
      <p>Staked: {staked ? formatEther(staked) : '0'} $BURNA</p>
      <input placeholder="Amount to stake" onChange={e => setAmount(e.target.value)} />
      <button onClick={() => approve?.()}>Approve</button>
      <button onClick={() => stake?.()}>Stake</button>
      <button onClick={() => unstake?.()}>Unstake</button>
    </div>
  );
}
