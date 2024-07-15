<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= device-width, initial-scale=1.0">
    <title>LinkPlus</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <style>
/* CSS */

        /* body */
        body {
            font-family: Poppins;
            width: 1440px;
            margin: auto;
            padding: 0;
            align-items:center;
            justify-content:center;
        }

        /* header + navigation bar*/
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #F8FBF9;
            margin: auto;
            color: white;
            height: 158px;
            width: 1440px;
        }

        .header img {
            height: 114px;
            width: 114px;;
        }
        .header nav a {
            margin: 0 20px;
            color: #063D19;
            text-decoration: none;
            font-size: 24px;
            font-weight: 400;
        }
        .header .login {
            background: linear-gradient(to right, #192D20 0%,#1F5C33 59%, #013111 100%);
            color: #fff;
            padding: 10px 35px;
            border: none;
            cursor: pointer;
            border-radius: 10px;
            width: 198px;
            height: 80.1px;
            font-size: 24px;
        }

        .msg-common-section {
            display: flex;
            height: 100vh;
        }

        .msg-left-sec {
            width: 30%;
            border-right: 1px solid #ccc;
        }

        .search-bar {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .search-bar input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        .chat-list {
            overflow-y: auto;
            height: calc(100% - 60px);
        }

        .chat-item {
            padding: 10px;
            border-bottom: 1px solid #ccc;
            cursor: pointer;
        }

        .chat-item:hover {
            background-color: #f1f1f1;
        }

        .msg-right-sec {
            width: 70%;
            display: flex;
            flex-direction: column;
        }

        .chat-header {
            padding: 10px;
            border-bottom: 1px solid #ccc;
            display: flex;
            justify-content: space-between;
        }

        .chat-messages {
            flex-grow: 1;
            padding: 10px;
            overflow-y: auto;
            background-color: #f9f9f9;
        }

        .message {
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
            background-color: #e1ffc7;
        }

        .message.sent {
            align-self: flex-end;
            background-color: #d4edda;
        }

        .chat-input {
            padding: 10px;
            border-top: 1px solid #ccc;
            display: flex;
        }

        .chat-input input {
            flex-grow: 1;
            padding: 10px;
            box-sizing: border-box;
        }

        .chat-input button {
            padding: 10px;
        }


    </style>
</head>
<body>

    <header class="header">
        <img src="{{ asset('images/logo.png') }}">
        <nav>
            <a href="{{ route('welcome') }}">Home</a>
            <a href="{{ route('alumini') }}">Network</a>
            <a href="{{ route('events') }}">Events</a>
            <a href="{{ route('jobs') }}">Jobs</a>
            <a href="#">Contact</a>
        </nav>
        <button class="login">Login</button>
    </header>


    <div class="msg-common-section">
        <!--left section , messages-->
        <div class="msg-left-sec">
            <div class="search-bar">
                <input type="text" placeholder="Search...">
            </div>

            <div class="chat-list">
                <!-- Chat items will be dynamically populated -->
            </div>            
        </div>
        
        <!--right section, the full view-->
        <div class="msg-right-sec">
            <div class="chat-header">
                <span>Yugeshini Muthukkumar</span>
                <span>last seen 45 minutes ago</span>
            </div>

            <div class="chat-messages" id="chat-messages">
                <!-- Messages will be dynamically populated -->
            </div>

            <div class="chat-input">
                <input type="text" id="message-input" placeholder="Start typing...">
                <button id="send-button">Send</button>
            </div>
        </div>
    </div>

    <script src="scripts.js"></script>
</body>
</html>