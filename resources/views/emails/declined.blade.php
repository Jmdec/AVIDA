<!DOCTYPE html>
<html>
<head>
    <title>Property Upload Status</title>
</head>
<body>
    @if ($upload->status === 'Declined')
        <h2>Your Property Upload Has Been Approved</h2>
        <p>Dear {{ $upload->name }},</p>
        <p>We are pleased to inform you that your property upload has been approved.</p>
        <p>Thank you for using our service!</p>
    @else
        <h2>Your Property Upload Has Been Cancelled</h2>
        <p>Dear {{ $upload->name }},</p>
        <p>We regret to inform you that your property upload has been cancelled.</p>
        <p>If you have any questions or concerns, please feel free to contact us.</p>
    @endif



    <p>Best Regards,<br></p>
</body>
</html>
