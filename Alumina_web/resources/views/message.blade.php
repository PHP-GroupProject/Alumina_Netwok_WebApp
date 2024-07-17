<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link rel="stylesheet" href="{{ asset('css/message.css') }}">
</head>
<body>
    <header class="header">
        <img src="{{ asset('images/logo.png') }}" width="45" height="35">
        <nav>
            <a href="{{ route('welcome') }}">Home</a>
            <a href="{{ route('alumini') }}">Network</a>
            <a href="{{ route('events') }}">Events</a>
            <a href="{{ route('jobs') }}">Jobs</a>
        </nav>
        <a href="{{ route('login') }}">
            <button class="login">Login</button>
        </a>
    </header>

    <div class="message-container">
        <div class="chat-list">
            <h3>Chats</h3>
            <input type="text" placeholder="Search..." class="search-bar">
            <ul>
                <!-- Dummy Data for UI Testing -->
                <li>
                    <a href="{{ route('message', ['id' => 3]) }}" class="chat-item">
                        <img src="{{ asset('images/Profile3.jpg') }}" alt="Profile3">
                        <div class="chat-details">
                            <span>David Johnson</span>
                            <p>Last message from David...</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="chat-item">
                        <img src="{{ asset('images/Profile1.jpg') }}" alt="Profile1">
                        <div class="chat-details">
                            <span>Jane Smith</span>
                            <p>Last message from Jane...</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="chat-item">
                        <img src="{{ asset('images/Profile2.jpg') }}" alt="Profile2">
                        <div class="chat-details">
                            <span>Michael Johnson</span>
                            <p>Last message from Michael...</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="chat-item">
                        <img src="{{ asset('images/Profile4.jpg') }}" alt="Profile4">
                        <div class="chat-details">
                            <span>Emily Davis</span>
                            <p>Last message from Emily...</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <div class="chat-window">
            <div class="chat-item">
                <img src="{{ asset('images/Profile4.jpg') }}" alt="Profile4">
                <span>Emily Davis</span>
            </div>
            <div class="messages">
                <!-- Dummy Data for UI Testing -->
                <div class="message sent">
                    <p>Can I know the details?.</p>
                    <span>12:00</span>
                </div>
                <div class="message received">
                    <p>yeah,I'll send.</p>
                    <span>12:01</span>
                </div>
            </div>
            <form action="#" method="POST">
                <input type="text" name="message" placeholder="Type a message..." required>
                <button type="submit">Send</button>
            </form>
        </div>
    </div>
</body>
</html>
