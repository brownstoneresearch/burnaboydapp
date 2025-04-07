'use client';

import { ConnectButton } from '@rainbow-me/rainbowkit';
import WalletBalance from '../components/WalletBalance';
import TransferForm from '../components/TransferForm';
import StakingPanel from '../components/StakingPanel';
import FloatingTransactions from '../components/FloatingTransactions';

export default function Page() {
  return (
    <div style={{
      minHeight: '100vh',
      padding: '2rem',
      backgroundColor: '#000',
      color: '#fff',
      fontFamily: 'Inter, sans-serif'
    }}>
      <h1>$BURNA Token</h1>
      <ConnectButton />
      <WalletBalance />
      <TransferForm />
      <StakingPanel />
      <FloatingTransactions />
    </div>
  );
}
