@php
    use Illuminate\Support\Facades\Auth;
    $loggedUserId = Auth::id();
    // or Auth::user()->id
@endphp
<x-app-layout>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        /* Remove underline from all links */
        a {
            text-decoration: none !important;
        }

        /* Optional: hover effect for links */
        a:hover {
            text-decoration: none !important;
        }
        
    </style>
    <div class="d-flex min-vh-100" style="background: white;">
        <!-- Sidebar -->
        <div class="w-64 border-end p-4">
            @include('web.sidebar')
        </div>

        <!--Main content -->
        <div class="card-body">
                <h5 class="card-title">Order Details</h5>
                <p>Order ID: {{ $order->id }}</p>
                <p>Transaction ID: {{ $order->transaction_id }}</p>
                <p>Plan: {{ $order->plan->name }}</p>
                <p>Amount: {{ $order->currency }} {{ number_format($order->amount, 2) }}</p>
                <p>Status: 
                    <span class="inline-block px-2 py-1 text-xs font-semibold rounded-full 
                        {{ $order->status === 'completed' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                        {{ ucfirst($order->status) }}
                    </span>
                </p>
                <p>Date: {{ $order->paid_at ? $order->paid_at->format('M d, Y H:i') : 'N/A' }}</p>
            
                
        </div>

        <div class="flex-grow-1 p-4">
        </div>
    </div>

</x-app-layout>