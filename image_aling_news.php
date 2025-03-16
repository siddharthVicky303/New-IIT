<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News & Announcements</title>
    <style>
        /* General Page Styling */
        body {
            font-family: Arial, sans-serif;
        }

        /* Container to hold both sections */
        .main-container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        /* Styling for News & Events Section */
        .news-events {
            width: 70%; /* Adjust as needed */
            background-color: #f9fff3;
            padding: 15px;
            border-radius: 8px;
            border: 2px solid #dfe7d8;
        }

        .news-events-title {
            font-size: 18px;
            font-weight: bold;
            color: red;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .news-items {
            display: flex;
            gap: 15px;
        }

        .news-card {
            width: 30%; /* Adjust card width */
            background-color: white;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .news-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 5px;
        }

        .news-text {
            font-size: 14px;
            color: #333;
            margin-top: 5px;
        }

        .news-title {
            font-size: 16px;
            font-weight: bold;
            margin-top: 10px;
        }

        .details-button {
            background-color: #d9534f;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 8px;
            display: inline-block;
            text-decoration: none;
            font-size: 14px;
        }

        .details-button:hover {
            background-color: #c9302c;
        }

        /* Styling for Announcements Section */
        .announcements {
            width: 28%; /* Adjust width as needed */
            background-color: #f9fff3;
            padding: 15px;
            border-radius: 8px;
            border: 2px solid #dfe7d8;
        }

        .announcements-title {
            font-size: 18px;
            font-weight: bold;
            color: red;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .announcement-item {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .announcement-item img {
            width: 80px;
            height: 100px;
            object-fit: cover;
            border-radius: 5px;
        }

        .announcement-text {
            font-size: 14px;
            color: #333;
            flex-grow: 1;
        }

        .read-more {
            background-color: #d9534f;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            display: inline-block;
        }

        .read-more:hover {
            background-color: #c9302c;
        }
    </style>
</head>
<body>

    <div class="main-container">
        <!-- News & Events Section -->
        <div class="news-events">
            <div class="news-events-title">News & Events</div>
            <div class="news-items">
                <!-- First News Card -->
                <div class="news-card">
                    <img src="img/news44.jpg" alt="News 1">
                    <p class="news-title">SHSS Seminar Series 2024-2025</p>
                    <p class="news-text">
                        Two acclaimed pediatric surgeons and novelists, Dr Kalpana Swaminathan and Dr Ishrat Syed...
                    </p>
                    <a href="#" class="details-button">Details</a>
                </div>

                <!-- Second News Card -->
                <div class="news-card">
                    <img src="img/news5.jpg" alt="News 2">
                    <p class="news-title">SHSS Seminar Series 2024-2025</p>
                    <p class="news-text">
                        Talk by Dr Swati Kumari. Venue: POD-1C (SHSS Seminar Hall-301) Date: 4 March...
                    </p>
                    <a href="#" class="details-button">Details</a>
                </div>

                <!-- Third News Card -->
                <div class="news-card">
                    <img src="img/news66.jpg" alt="News 3">
                    <p class="news-title">MA English (Literature & Linguistics)</p>
                    <p class="news-text">
                        NEW ACADEMIC PROGRAM ALERT!
                    </p>
                    <a href="#" class="details-button">Details</a>
                </div>
            </div>
        </div>

        <!-- Announcements Section -->
        <div class="announcements">
            <div class="announcements-title">Announcements</div>
            <div class="announcement-item">
                <img src="img/news66.jpg" alt="Announcement Image">
                <p class="announcement-text">
                    MA English (Literature & Linguistics)
                    <a href="#" class="read-more">Read More</a>
                </p>
            </div>
        </div>
    </div>

</body>
</html>
