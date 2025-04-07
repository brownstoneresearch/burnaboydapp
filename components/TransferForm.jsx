'use client';
import { useState } from 'react';
import { useContractWrite, usePrepareContractWrite } from 'wagmi';
import { parseEther } from 'viem';

const tokenAddress = '0x00b8a9bb1dcab2cf2375284d70b39e6ef7d86aae';
const erc20ABI = [
  {
    "name": "transfer", "type": "function", "stateMutability": "nonpayable",
    "inputs": [
      { "name": "to", "type": "address" },
      { "name": "amount", "type": "uint256" }
    ],
    "outputs": [ { "name": "", "type": "bool" } ]
  }
];

export default function TransferForm() {
  const [to, setTo] = useState('');
  const [amount, setAmount] = useState('');

  const { config } = usePrepareContractWrite({
    address: tokenAddress,
    abi: erc20ABI,
    functionName: 'transfer',
    args: [to, parseEther(amount || '0')],
    enabled: Boolean(to && amount)
  });
  const { write } = useContractWrite(config);

  return (
    <div>
      <h3>Send $BURNA</h3>
      <input placeholder="To address" onChange={e => setTo(e.target.value)} />
      <input placeholder="Amount" onChange={e => setAmount(e.target.value)} />
      <button onClick={() => write?.()}>Send</button>
    </div>
  );
}
