'use client';
import { useAccount, useContractRead } from 'wagmi';
import { formatEther } from 'viem';

const tokenAddress = '0x00b8a9bb1dcab2cf2375284d70b39e6ef7d86aae';
const erc20ABI = [
  {
    "name": "balanceOf", "type": "function", "stateMutability": "view",
    "inputs": [ { "name": "", "type": "address" } ],
    "outputs": [ { "name": "", "type": "uint256" } ]
  }
];

export default function WalletBalance() {
  const { address } = useAccount();
  const { data } = useContractRead({
    address: tokenAddress,
    abi: erc20ABI,
    functionName: 'balanceOf',
    args: [address],
    watch: true
  });
  return <p>Balance: {data ? formatEther(data) : '0'} $BURNA</p>;
}
