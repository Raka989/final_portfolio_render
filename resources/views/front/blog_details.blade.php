<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
<style>
    /* Global styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f5f5f5;
        color: #333;
        line-height: 1.6;
        margin: 20px;
    }

    /* Blog container */
    .blog-container {
        max-width: 850px;
        margin: 50px auto;
        padding: 25px;
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: all 0.3s ease-in-out;
    }

    /* Blog header */
    .blog-header h1 {
        text-align: center;
        font-size: 2.8em;
        color: #222;
        margin-bottom: 10px;
        letter-spacing: 1px;
    }

    .blog-date {
        text-align: center;
        font-size: 1em;
        color: #777;
        margin-bottom: 25px;
    }

    /* Blog image */
    .blog-image img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        margin-bottom: 25px;
        transition: transform 0.3s ease-in-out;
    }

    .blog-image img:hover {
        transform: scale(1.03);
    }

    /* Blog content */
    .blog-content {
        font-size: 1.2em;
        line-height: 1.8;
        color: #444;
    }

    .short {
        display: -webkit-box;
        -webkit-line-clamp: 5;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .full {
        overflow: visible;
    }

    /* Read more button */
    .read-more-btn {
        display: inline-block;
        padding: 12px 24px;
        margin-top: 20px;
        font-size: 1em;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .read-more-btn:hover {
        background-color: #0056b3;
    }

    /* Blog footer */
    .blog-footer {
        margin-top: 30px;
        text-align: right;
        font-size: 0.9em;
        color: #888;
    }

    /* Responsive design */
    @media (max-width: 768px) {
        .blog-header h1 {
            font-size: 2.2em;
        }

        .blog-content {
            font-size: 1.1em;
        }

        .read-more-btn {
            padding: 10px 20px;
        }
    }

</style>
</head>
<body>
    <div class="blog-container">
        <div class="blog-header">
            <h1>{{$single->title}}</h1>
            <p class="blog-date">{{$single->date}}</p>
        </div>
        <div class="blog-image">
            <img src="{{asset('blog_images/'.$single->image )}}" alt="Blog Image">
        </div>
        <div class="blog-content short">
            {!!$single->long_description!!}
        </div>

        </div>
    </div>

<script>
    const readMoreBtn = document.getElementById('readMoreBtn');
    const blogContent = document.querySelector('.blog-content');

    readMoreBtn.addEventListener('click', () => {
        blogContent.classList.toggle('full');
        readMoreBtn.textContent = blogContent.classList.contains('full') ? 'Read Less' : 'Read More';
    });
</script>
</body>
</html>
