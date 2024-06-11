<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <title>Sohbet</title>
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Source Sans Pro', sans-serif;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        .card-header {
            background-color: #000000;
            color: white;
            border-bottom: 0;
            text-align: center;
            padding: 20px;
        }
        .card-title {
            font-weight: 700;
            font-size: 1.25rem;
        }
        .direct-chat-messages {
            background-color: #fff;
            padding: 20px;
            border-top: 1px solid #f4f4f4;
            overflow-y: auto;
        }
        .direct-chat-msg {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
        }
        .direct-chat-msg.right {
            flex-direction: row-reverse;
        }
        .direct-chat-text {
            background: #d2d6de;
            border-radius: 20px;
            padding: 10px 15px;
            margin-left: 10px;
            max-width: 75%;
            word-break: break-word;
            color: #444;
        }
        .direct-chat-msg.right .direct-chat-text {
            background: #000000;
            color: white;
            margin-right: 10px;
        }
        .direct-chat-infos {
            margin-bottom: 5px;
        }
        .direct-chat-name {
            font-weight: 600;
        }
        .direct-chat-timestamp {
            font-size: 0.85rem;
            color: #888;
        }
        .card-footer {
            background-color: #fff;
            padding: 20px;
            border-top: 1px solid #f4f4f4;
        }
        .input-group .form-control {
            border-radius: 20px 0 0 20px;
            border-right: 0;
        }
        .input-group .btn {
            border-radius: 0 20px 20px 0;
        }
        @media (max-width: 768px) {
            .card {
                width: 90%;
            }
        }
    </style>
</head>
<body style="background-color: black">
    <div class="d-flex justify-content-center align-items-center pt-5">
        <div class="card col-md-6 direct-chat direct-chat-primary" style="height: 80vh;">
            <div class="card-header">
                <h3 class="card-title">İletişim</h3>
            </div>
            <div class="card-body">
                <div class="direct-chat-messages" style="height: 100%">
                    @foreach ($messages as $message)
                        @if ($message->sender_id != Auth::user()->id)
                            <div class="direct-chat-msg">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-left">1</span>
                                </div>
                                <div class="direct-chat-text">
                                    {{ $message->message }}
                                </div>
                            </div>
                        @else
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-right">{{ Auth::user()->email }}</span>
                                </div>
                                <div class="direct-chat-text">
                                    {{ $message->message }}
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="card-footer">
                <form action="{{ route('userChatPost.post') }}" method="post">
                    @csrf
                    <div class="input-group">
                        <input name="message" placeholder="Mesaj yaz..." class="form-control">
                        <input name="sender_id" value="{{ Auth::user()->id }}" hidden>
                        <input name="receiver_id" value="1" hidden>
                        <span class="input-group-append">
                            <button style="background-color: #000000" type="submit" class="btn btn-primary">Gönder</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const messagesDiv = document.querySelector('.direct-chat-messages');
        messagesDiv.scrollTop = messagesDiv.scrollHeight;
    </script>
</body>
</html>
