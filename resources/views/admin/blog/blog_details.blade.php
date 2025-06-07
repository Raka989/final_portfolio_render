<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
/* Container styling */
.blog-container {
    max-width: 800px;
    margin: 40px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

/* Blog header */
.blog-header {
    text-align: center;
    margin-bottom: 20px;
}

.blog-header h1 {
    font-size: 2.5em;
    color: #333;
}

.blog-date {
    font-size: 0.9em;
    color: #888;
}

/* Blog image */
.blog-image img {
    width: 100%;
    border-radius: 12px;
    margin-bottom: 20px;
}

/* Blog content */
.blog-content {
    font-size: 1.1em;
    line-height: 1.7em;
    color: #555;
}

/* "Short" class for read more functionality */
.short {
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 6; /* Show first 6 lines */
    -webkit-box-orient: vertical;
}

/* Full content */
.full {
    overflow: visible;
}

/* Read more button */
#readMoreBtn {
    display: block;
    margin: 20px 0;
    padding: 10px 20px;
    font-size: 1em;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

#readMoreBtn:hover {
    background-color: #0056b3;
}

/* Blog footer */
.blog-footer {
    margin-top: 20px;
    text-align: right;
    font-size: 1em;
    color: #777;
}

/* Responsive design */
@media (max-width: 768px) {
    .blog-container {
        padding: 15px;
    }

    .blog-header h1 {
        font-size: 2em;
    }

    .blog-content {
        font-size: 1em;
    }

    #readMoreBtn {
        font-size: 0.9em;
        padding: 8px 16px;
    }
}

    </style>



</head>
<body>
 <input type=text name='title' value="{{$single->title}}">

</body>
</html>

