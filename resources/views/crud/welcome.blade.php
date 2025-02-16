<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #f2f2f2;
            font-family: 'Arial', sans-serif;
        }

        .welcome-page {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            animation: fade-in 2s ease-in-out;
        }

        h1 {
            color: #343a40;
            opacity: 0;
            animation: text-fade-in 2s ease-in-out forwards;
        }

        p.lead {
            color: #6c757d;
            margin-top: 10px;
        }

        .moving-text {
            font-weight: bold;
            color: #17a2b8;
            animation: move-text 5s linear 1;
        }

        /* حركة الجملة مرة واحدة */
        @keyframes move-text {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(100%);
            }
        }

        /* تأثيرات الأزرار */
        .custom-btn {
            transition: transform 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
            animation: button-bounce 2s ease-out forwards; /* حركة أكبر للأزرار عند التحميل */
        }

        /* حركة الأزرار بتأثير ارتداد عند التحميل */
        @keyframes button-bounce {
            0% {
                transform: translateY(-100px); /* بداية الحركة - مسافة كبيرة */
                opacity: 0;
            }
            50% {
                transform: translateY(20px); /* ترتد الأزرار للأمام */
                opacity: 1;
            }
            70% {
                transform: translateY(-10px); /* ارتداد إضافي لزيادة الحركة */
            }
            100% {
                transform: translateY(0); /* تعود الأزرار لمكانها الطبيعي */
            }
        }

        .custom-btn:hover {
            transform: scale(1.2); /* تكبير الأزرار بنسبة أكبر عند الوقوف عليها */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); /* إضافة ظل أكبر */
        }

        /* تغيير لون الزر عند الوقوف عليه */
        .btn-primary:hover {
            background-color: #138496;
            border-color: #117a8b;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        /* مثال لإضافة لون مخصص للزر الجديد */
        .btn-show-users {
            background-color: #ffc107; /* لون أصفر */
            color: #fff;
            border: none;
        }

        .btn-show-users:hover {
            background-color: #e0a800;
            border-color: #d39e00;
        }

        /* حركات Fade-in */
        @keyframes fade-in {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        @keyframes text-fade-in {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 1.8rem;
            }

            .btn {
                width: 100px;
                margin-bottom: 10px;
            }
        }

    </style>
</head>
<body>
    <div class="container text-center welcome-page">
        <h1 class="welcome-text">Welcome To Our Company</h1>
        <p class="lead moving-text">Your Control Panel For Users </p> 
        <div class="mt-4">
            <a href="{{route('users.create')}}" class="btn btn-primary custom-btn mx-2">Add User</a>
            <a href="{{route('users.index')}}" class="btn btn-show-users custom-btn mx-2">Show Users</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
