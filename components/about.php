<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>About - ChiefHive</title>
    <link rel="stylesheet" href="navbar.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            color: #fff;
        }

        h1,
        h2 {
            color: #000000be;
        }

        .main-heading {
            text-align: center;
            font-size: 48px;
            font-weight: bold;
            color: #e84517;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            margin: 30px auto;
            width: 800px;
        }

        .container-head {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 30px;
            box-shadow: 0 0 50px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            color: #333;
        }

        p {
            line-height: 1.2;
            font-style: italic;
        }

        .comment {
            border-bottom: 1px solid #ddd;
            padding: 15px 0;
        }

        .comment:last-child {
            border-bottom: none;
        }

        .comment-author {
            font-weight: bold;
            color: #e84517;
        }

        form {
            margin-top: 30px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        button {
            background-color: #e84517;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #cc3a12;
        }

        @media only screen and (min-width: 900px) {

            .container-head,
            .main-heading {
                width: 80%;
            }
        }

        @media only screen and (max-width: 899px) {

            .container-head,
            .main-heading {
                width: 70%;
            }
        }
    </style>
</head>

<body>

    <?php include './navbar.php'; ?>

    <div class="main-heading">ChiefHive</div>

    <div class="container-head">
        <h1>About ChiefHive </h1>
        <p>
            At ChiefHive, we are a collective of innovators, developers, and strategic thinkers passionate about
            building solutions that shape the future of technology and community...
        </p>

        <h2>User Comments</h2>

        <div class="comment">
            <div class="comment-author">John Doe:</div>
            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
        </div>
        <div class="comment">
            <div class="comment-author">Sarah W.:</div>
            <div>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</div>
        </div>
        <div class="comment">
            <div class="comment-author">TechFan88:</div>
            <div>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</div>
        </div>
        <div class="comment">
            <div class="comment-author">BeeLover22:</div>
            <div>Ut enim ad minima veniam, quis nostrum exercitationem ullam.</div>
        </div>
        <div class="comment">
            <div class="comment-author">Mark K.:</div>
            <div>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse.</div>
        </div>
        <div class="comment">
            <div class="comment-author">CreativeDev:</div>
            <div>Duis aute irure dolor in reprehenderit in voluptate velit esse.</div>
        </div>
        <div class="comment">
            <div class="comment-author">InnovatorX:</div>
            <div>Excepteur sint occaecat cupidatat non proident, sunt in culpa.</div>
        </div>
        <div class="comment">
            <div class="comment-author">JazzyBee:</div>
            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
        </div>
        <div class="comment">
            <div class="comment-author">FrontendPhil:</div>
            <div>Curabitur non nulla sit amet nisl tempus convallis.</div>
        </div>
        <div class="comment">
            <div class="comment-author">TheRealQueenBee:</div>
            <div>Praesent sapien massa, convallis a pellentesque nec.</div>
        </div>

        <h2>Write a New Comment</h2>
        <form>
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="comment">Your Comment:</label>
            <textarea id="comment" name="comment" rows="4" required></textarea>

            <button type="submit">Post Comment</button>
        </form>
    </div>

    <?php include './footer.php'; ?>
</body>

</html>
