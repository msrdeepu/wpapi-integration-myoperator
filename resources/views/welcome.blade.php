<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="antialiased bg-gray-100">

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @if(session('error_details') && is_array(session('error_details')))
    <div class="alert alert-danger">
        <strong>Error Details:</strong>
        <ul>
            @foreach(session('error_details') as $detail)
            <li>{{ $detail }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @endif


    <div class="container py-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="card-title mb-4">Send WhatsApp Message</h1>

                <form action="{{ route('sendmessage') }}" method="POST">
                    @csrf

                    <!-- Campaign Name -->
                    <div class="mb-3">
                        <label for="campaignName" class="form-label">Campaign Name</label>
                        <input type="text" id="campaignName" name="campaignName" class="form-control" required>
                    </div>

                    <!-- Destination -->
                    <div class="mb-3">
                        <label for="destination" class="form-label">Destination (Phone Number)</label>
                        <input type="text" id="destination" name="destination" class="form-control" required>
                    </div>

                    <!-- User Name -->
                    <div class="mb-3">
                        <label for="userName" class="form-label">User Name</label>
                        <input type="text" id="userName" name="userName" class="form-control" required>
                    </div>

                    <!-- Customer Name -->
                    <div class="mb-3">
                        <label for="customer_name" class="form-label">Customer Name</label>
                        <input type="text" id="customer_name" name="customer_name" class="form-control" required>
                    </div>

                    <!-- Amount -->
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="text" id="amount" name="amount" class="form-control" required>
                    </div>

                    <!-- Plot Number -->
                    <div class="mb-3">
                        <label for="plot_number" class="form-label">Plot Number</label>
                        <input type="text" id="plot_number" name="plot_number" class="form-control" required>
                    </div>

                    <!-- Receipt Number -->
                    <div class="mb-3">
                        <label for="receipt_number" class="form-label">Receipt Number</label>
                        <input type="text" id="receipt_number" name="receipt_number" class="form-control" required>
                    </div>

                    <!-- Company Contact Number -->
                    <div class="mb-3">
                        <label for="company_contact_number" class="form-label">Company Contact Number</label>
                        <input type="text" id="company_contact_number" name="company_contact_number"
                            class="form-control" required>
                    </div>

                    <!-- Company Name -->
                    <div class="mb-3">
                        <label for="company_name" class="form-label">Company Name</label>
                        <input type="text" id="company_name" name="company_name" class="form-control" required>
                    </div>

                    <!-- Media URL -->
                    <div class="mb-3">
                        <label for="mediaUrl" class="form-label">Media URL</label>
                        <input type="url" id="mediaUrl" name="mediaUrl" class="form-control" required>
                    </div>

                    <!-- Filename -->
                    <div class="mb-3">
                        <label for="filename" class="form-label">Filename</label>
                        <input type="text" id="filename" name="filename" class="form-control" required>
                    </div>

                    <!-- Tags -->
                    <div class="mb-3">
                        <label for="tags" class="form-label">Tags (Comma-separated)</label>
                        <input type="text" id="tags" name="tags" class="form-control">
                        <small class="form-text text-muted">Example: tag1, tag2</small>
                    </div>

                    <!-- Attributes -->
                    <div class="mb-3">
                        <label for="attributes" class="form-label">Attributes (Key-Value Pairs in JSON)</label>
                        <textarea id="attributes" name="attributes" class="form-control"></textarea>
                        <small class="form-text text-muted">Example: {"location": "India", "subscription":
                            "Premium"}</small>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>