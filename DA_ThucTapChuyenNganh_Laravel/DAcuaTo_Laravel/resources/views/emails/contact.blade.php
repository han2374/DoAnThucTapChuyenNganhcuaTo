<!doctype html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <p>Xin chào,</p>
  <p>Bạn vừa nhận được một tin nhắn từ form trên website:</p>
  <ul>
    <li><strong>Họ tên:</strong> {{ $name ?? '—' }}</li>
    <li><strong>Email:</strong> {{ $email }}</li>
    <li><strong>Website:</strong> {{ $website ?? '—' }}</li>
  </ul>
  <p><strong>Nội dung:</strong></p>
  <p>{{ $message ?? '—' }}</p>
  <p>Vui lòng liên hệ người dùng để tư vấn.</p>
  <p>— Website</p>
</body>
</html>
