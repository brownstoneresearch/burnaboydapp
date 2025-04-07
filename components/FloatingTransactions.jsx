'use client';
import { useState } from 'react';
import { useContractEvent } from 'wagmi';
import { formatEther } from 'viem';

const tokenAddress = '0x00b8a9bb1dcab2cf2375284d70b39e6ef7d86aae';
const erc20ABI = [{
  "anonymous": false, "name": "Transfer", "type": "event",
  "inputs": [
    { "indexed": true, "name": "from", "type": "address" },
    { "indexed": true, "name": "to", "type": "address" },
    { "indexed": false, "name": "value", "type": "uint256" }
  ]
}];

export default function FloatingTransactions() {
  const [transfers, setTransfers] = useState([]);
  useContractEvent({
    address: tokenAddress,
    abi: erc20ABI,
    eventName: 'Transfer',
    listener: (logs) => {
      const latest = logs.map(log => ({
        from: log.args.from,
        to: log.args.to,
        value: formatEther(log.args.value)
      })).slice(0, 5);
      setTransfers(prev => [...latest, ...prev].slice(0, 5));
    }
  });

  return (
    <div style={{
      position: 'fixed',
      bottom: 20,
      right: 20,
      background: '#111',
      padding: '1rem',
      borderRadius: '1rem',
      color: 'white',
      maxWidth: 300
    }}>
      <h4 style={{ color: 'orange' }}>Recent Transfers</h4>
      <ul>
        {transfers.map((t, i) => (
          <li key={i}>From: {t.from.slice(0, 6)}... To: {t.to.slice(0, 6)} → {t.value}</li>
        ))}
      </ul>
    </div>
  );
}
