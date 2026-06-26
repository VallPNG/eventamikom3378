@extends('layouts.admin')
@section('title', 'Laporan Transaksi - Admin')
@section('page_title', 'Laporan Transaksi')
@section('page_subtitle', 'Pantau arus kas dan penjualan tiket Anda.')

@section('content')
<div class="overflow-x-auto">
    <table class="w-full text-left border-collapse">
        <thead class="bg-indigo-50/50 text-indigo-900 uppercase text-[11px] font-extrabold tracking-widest border-b-2 border-indigo-100">
            <tr>
                <th class="px-8 py-5">Order ID</th>
                <th class="px-8 py-5">Detail Pembeli</th>
                <th class="px-8 py-5">Event</th>
                <th class="px-8 py-5">Tgl Transaksi</th>
                <th class="px-8 py-5">Status</th>
                <th class="px-8 py-5 text-right">Total Tagihan</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100 bg-white">
            @forelse($transactions as $trx)
            <tr class="hover:bg-indigo-50/30 hover:shadow-sm transition-all duration-200 {{ $trx->status == 'pending' ? 'opacity-75' : '' }}">
                <td class="px-8 py-6">
                    <span class="font-mono font-bold px-3 py-1.5 rounded-md text-sm shadow-sm {{ $trx->status == 'pending' ? 'bg-slate-100 text-slate-600 border border-slate-200' : 'text-indigo-700 bg-indigo-100 border border-indigo-200' }}">
                        {{ $trx->order_id }}
                    </span>
                </td>
                <td class="px-8 py-6">
                    <p class="font-bold text-slate-900 text-base">{{ $trx->customer_name }}</p>
                    <p class="text-sm text-slate-500 mt-0.5">{{ $trx->customer_email }} &bull; {{ $trx->customer_phone }}</p>
                </td>
                <td class="px-8 py-6">
                    <p class="font-semibold text-slate-700 bg-slate-50 inline-block px-3 py-1 rounded-full text-xs border border-slate-100">
                        {{ $trx->event->title ?? '-' }}
                    </p>
                </td>
                <td class="px-8 py-6 text-sm font-medium text-slate-500">
                    {{ $trx->created_at->timezone('Asia/Jakarta')->format('d M Y') }} <br>
                    <span class="text-xs text-slate-400">{{ $trx->created_at->timezone('Asia/Jakarta')->format('H:i') }} WIB</span>
                </td>
                <td class="px-8 py-6">
                    @if($trx->status === 'settlement' || $trx->status === 'success')
                        <span class="px-3 py-1.5 bg-emerald-100 text-emerald-700 rounded-lg text-xs font-black uppercase tracking-wide ring-1 ring-emerald-300 shadow-sm">Success</span>
                    @elseif($trx->status === 'pending')
                        <span class="px-3 py-1.5 bg-amber-100 text-amber-700 rounded-lg text-xs font-black uppercase tracking-wide ring-1 ring-amber-300 shadow-sm">Pending</span>
                    @else
                        <span class="px-3 py-1.5 bg-rose-100 text-rose-700 rounded-lg text-xs font-black uppercase tracking-wide ring-1 ring-rose-300 shadow-sm">{{ $trx->status }}</span>
                    @endif
                </td>
                <td class="px-8 py-6 text-right font-black text-lg {{ $trx->status == 'pending' ? 'text-slate-600' : 'text-slate-900' }}">
                    Rp {{ number_format($trx->total_price, 0, ',', '.') }}
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="px-8 py-16 text-center">
                    <div class="flex flex-col items-center justify-center">
                        <svg class="w-12 h-12 text-slate-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                        <p class="text-slate-500 font-medium text-lg">Belum ada transaksi</p>
                    </div>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="px-8 py-6 bg-slate-50/50 border-t items-center">
    {{ $transactions->links() }}
</div>
@endsection

<!-- 3378 -->