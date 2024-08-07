<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Event Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('addevent.png');
            background-size: cover;
            background-repeat: no-repeat;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
    width: 60%;
    max-width: 600px;
    background-color: solid #FFD700; 
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); /* Outer shadow effect */
    margin-left: 230px;
    margin-top: 10px;
    position: absolute;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    
    
}



    

        h2 {
            text-align: center;
            margin-top:20px;
            color: white;
        }

        .form-group {
            margin-bottom: 20px;
            color:black;
        }

        label {
            font-weight: bold;
            display: block; /* Ensures each label is on a new line */
            margin-bottom: 5px;
            color:white;
        }

        input[type="text"], input[type="date"], textarea {
            width: calc(100% - 22px); /* Adjusts for padding and border */
            padding: 10px;
            border: 1px;
            box-shadow: 0 0 20px rgba(255, 218, 185, 0.5);
 /* Goldenrod color for sunlight */

            border-radius: 4px;
        }

        .form-group textarea {
            resize: vertical; /* Allows vertical resizing of textarea */
        }

        .btn-primary {
            background-color: black;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
        
        }

        .btn-primary:hover {
            background-color: solid #FFD700;
        }

        .btn-secondary {
            background-color: black;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
            margin-left:470px;
        }

        .btn-secondary:hover {
            background-color: solid #FFD700;
        }
    </style>
</head>
<body style="background-image: url('{{ asset('images/addevent.png') }}'); background-size: cover; background-repeat: no-repeat; height: 130vh; margin: 0;">
    <div class="container">
        <h2>Add Event Details</h2>
        <form method="POST" action="{{ route('store') }}">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input id="title" type="text" name="title" required autofocus>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="images">Images</label>
                <input id="images" type="text" name="images">
                <small>Enter image URLs or paths separated by commas.</small>
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input id="date" type="date" name="date" required>
            </div>

            <div class="form-group">
                <label for="venue">Venue</label>
                <input id="venue" type="text" name="venue" required>
            </div>

            <div class="form-group">
                <label for="keywords">Keywords</label>
                <input id="keywords" type="text" name="keywords">
                <small>Enter keywords separated by commas.</small>
            </div>

            <button type="submit" class="btn-primary">Add</button>
        
        </form>
    
    
        <form method="GET" action="{{ route('events') }}">
            @csrf
            <button type="submit" class="btn-secondary">See Events</button>
        </form>
    </div>
</body>
</html>

              