<style>
    .table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-size: 16px;
        background-color: #f9f9f9;
    }
    .thead-dark th {
        background-color: #343a40;
        color: white;
        padding: 12px;
        text-align: center;
    }
    .table tbody tr {
        text-align: center;
        border-bottom: 1px solid #dddddd;
    }
    .table td {
        padding: 12px;
        text-align: center;
    }
    .table tbody tr:hover {
        background-color: #f1f1f1;
    }
    .btn {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 8px 12px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 4px;
        transition: background-color 0.3s;
    }
    .btn:hover {
        background-color: #218838;
    }
    .badge {
        padding: 8px 12px;
        border-radius: 20px;
        color: white;
    }
    .bg-success {
        background-color: #28a745;
    }
    @media screen and (max-width: 768px) {
        .table {
            font-size: 14px;
        }

        .btn {
            font-size: 12px;
            padding: 6px 10px;
        }
    }
</style>
<x-app-layout style="direction: rtl">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="direction: rtl">
            {{ __('سفارشات') }}
        </h2>
    </x-slot>

    <div class="py-12" style="direction: rtl">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">شناسه</th>
                        <th scope="col">خودرو</th>
                        <th scope="col">شماره تماس</th>
                        <th scope="col">جمع مبلغ</th>
                        <th scope="col">ساعت</th>
                        <th scope="col">تاریخ</th>
                        <th scope="col">وضعیت</th>
                        <th scope="col">ابزار</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->car->name }}</td>
                            <td>{{ $order->contact }}</td>
                            <td>{{ number_format($order->amount) }} تومان</td>
                            <td>{{ $order->created_time }}</td>
                            <td>{{ $order->created_date }}</td>
                            <td>{{ $order->status ? 'تکمیل شده' : 'در انتظار تایید'}}</td>
                            <td>
                                @if(!$order->status)
                                    <form action="{{ route('orders.update', $order->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-success">تایید سفارش</button>
                                    </form>
                                @else
                                    <span style="color: #28a745">ثبت شده</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
