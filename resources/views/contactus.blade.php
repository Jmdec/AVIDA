
<style>
    form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    input[type="date"],
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button[type="submit"] {
        background-color: #4caf50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
    <br>
    <br>
<!-- contactus.blade.php -->
<h1>Contact Us</h1>
<form id="inquiryForm" action="{{ route('inquiry.store') }}" method="POST">
    @csrf
    <label for="inquiry_type">Inquiry Type:</label>
    <input type="text" id="inquiry_type" name="inquiry_type" value="{{ old('inquiry_type') }}" required><br>
    <label for="fullname">Full Name:</label>
    <input type="text" id="fullname" name="fullname" value="{{ old('fullname') }}" required><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ old('email') }}" required><br>
    <label for="number">Contact Number:</label>
    <input type="text" id="number" name="number" value="{{ old('number') }}" required><br>
    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" cols="50" required>{{ old('message') }}</textarea><br>
    <button type="submit">Submit</button>
</form>

{{--
@if (isset($contacts) && $contacts->count() > 0)

    <ul>
        @foreach ($contacts as $contact)
            <li>Name: {{ $contact->name }}<br>
            <li> Email: {{ $contact->email }}<br>
         <li>Message: {{ $contact->message }}</li>
        @endforeach
    </ul>
@else
    <p></p>
    @endif --}}



<script>
    document.getElementById("contactForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent default form submission

        var formData = new FormData(this); // Get form data

        fetch(this.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}', // Include CSRF token in headers
            },
            body: formData
        })
        .then(response => {
            if (response.ok) {
                return response.text(); // Return response body as text
            } else {
                throw new Error('Network response was not ok.');
            }
        })
        .then(data => {
            alert(data); // Display success message or error message
            this.reset(); // Reset the form
        })
        .catch(error => {
            console.error('There was an error!', error);
            alert("Error sending message: " + error.message); // Display error message
        });
    });
    </script>


