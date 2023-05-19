<!DOCTYPE html>
<html>
<head>
    <title>Kitap Düzenle</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
        }

        form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        form input[type="text"],
        form input[type="number"],
        form select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 15px;
        }

        form button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Kitap Düzenle</h1>

    <form method="POST" action="{{ route('books.update', $book->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Başlık:</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $book->title }}" required>
        </div>

        <div class="form-group">
            <label for="author">Yazar:</label>
            <input type="text" class="form-control" name="author" id="author" value="{{ $book->author }}" required>
        </div>

        <div class="form-group">
            <label for="page_count">Sayfa Sayısı:</label>
            <input type="number" class="form-control" name="page_count" id="page_count" value="{{ $book->page_count }}" required>
        </div>

        <div class="form-group">
            <label for="publisher">Yayınevi:</label>
            <input type="text" class="form-control" name="publisher" id="publisher" value="{{ $book->publisher }}" required>
        </div>

        <div class="form-group">
            <label for="available">Kullanılabilir:</label>
            <select class="form-control" name="available" id="available">
                <option value="1" @if($book->available) selected @endif>Evet</option>
                <option value="0" @if(!$book->available) selected @endif>Hayır</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Güncelle</button>
    </form>
</div>
</body>
</html>
