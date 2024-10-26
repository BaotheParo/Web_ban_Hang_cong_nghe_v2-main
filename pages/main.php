<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Trang Web</title>
    <style>
        /* CSS cho bong bóng chat */
        .chat-bubble {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }

        .chat-icon {
            background-color: #4CAF50;
            color: white;
            border-radius: 50%;
            padding: 20px;
            cursor: pointer;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            font-size: 24px;
        }

        .chat-window {
            display: none;
            position: absolute;
            bottom: 60px;
            right: 0;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            width: 400px;
        }

        .chat-header {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .chat-body {
            padding: 15px;
            max-height: 300px;
            overflow-y: auto;
        }

        .chat-footer {
            display: flex;
            padding: 15px;
        }

        .chat-footer input {
            flex: 1;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 10px;
            font-size: 16px;
        }

        .chat-footer button {
            padding: 15px 30px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .message {
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
        }

        .message.user {
            background-color: #f1f1f1;
            text-align: left;
            width: 70%;
        }

        .message.admin {
            background-color: #4CAF50;
            color: white;
            text-align: right;
        }

        /* Gợi ý câu hỏi */
        .suggestions {
            margin: 10px 0;
            font-size: 14px;
            color: #888;
        }

        .suggestion-item {
            cursor: pointer;
            color: #4CAF50;
            margin-right: 10px;
            padding: 5px;
            display: inline-block;
        }

        .suggestion-item:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="main margin_top">
    <?php
        if (isset($_GET['quanly'])) {
            $tam = $_GET['quanly'];
        } else {
            $tam = '';
        }
        if ($tam == 'login') {
            include("main/login.php");
        } elseif ($tam == 'signup') {
            include("main/signup.php");
        } elseif ($tam == 'home') {
            include("main-all.php");
        } elseif ($tam == 'logout') {
            include("main/logout.php");
        } elseif ($tam == 'sanpham') {
            include("main/spchitiet.php");
        } elseif ($tam == 'giohang') {
            include("main/giohang.php");
        } elseif ($tam == 'seeall') {
            include("main/tatcasp.php");
        } elseif ($tam == 'user') {
            include("main/user.php");
        } elseif ($tam == 'suauser') {
            include("main/suauser.php");
        } elseif ($tam == 'lietkedonhang') {
            include("main/lietkedonhang.php");
        } elseif ($tam == 'xemdonhang') {
            include("main/xemdonhang.php");
        } elseif ($tam == 'timkiem') {
            include("main/search_out.php");
        } elseif ($tam == 'see-tintuc') {
            include("main/see-all-tintuc.php");
        } elseif ($tam == 'seetintuc') {
            include("main/see_tintuc.php");
        } elseif ($tam == 'tintuc') {
            include("main/see-all-tintuc2.php");
        } elseif ($tam == 'camon') {
            include("main/camon.php");
        } elseif ($tam == 'loaisanpham') {
            include("main/see-all-sp3.php");
        } elseif ($tam == 'lienhe') {
            include("main/404.php");
        } elseif ($tam == '404') {
            include("main/404.php");
        } else {
            include("main/home.php");
        }
        ?>
    </div>

    <!-- Bong bóng chat -->
    <div class="chat-bubble">
        <div class="chat-icon" onclick="toggleChat()">
            <i class="fas fa-comments"></i>
        </div>
        <div class="chat-window" id="chatWindow">
            <div class="chat-header">
                <h4>Trò chuyện với chúng tôi</h4>
                <button onclick="toggleChat()">✖</button>
            </div>
            <div class="chat-body" id="chatBody">
                <p>Xin chào! Bạn cần hỗ trợ gì không?</p>
                <div class="suggestions">
                    <span class="suggestion-item" onclick="suggest('giá sản phẩm')">Tôi xin giá sản phẩm...</span>
                    <span class="suggestion-item" onclick="suggest('thời gian giao hàng')">Thời gian giao hàng...</span>
                    <span class="suggestion-item" onclick="suggest('khuyến mãi')">Khuyến mãi...</span>
                    <span class="suggestion-item" onclick="suggest('đổi trả sản phẩm')">Đổi trả sản phẩm...</span>
                </div>
            </div>
            <div class="chat-footer">
                <input type="text" id="userMessage" placeholder="Nhập tin nhắn..." onkeydown="if(event.key === 'Enter'){ sendMessage(); }">
                <button onclick="sendMessage()">Gửi</button>
            </div>
        </div>
    </div>

    <script>
        let firstMessageSent = false; // Biến kiểm tra xem tin nhắn đầu tiên đã được gửi chưa

        function toggleChat() {
            const chatWindow = document.getElementById('chatWindow');
            chatWindow.style.display = chatWindow.style.display === 'block' ? 'none' : 'block';
        }

        function suggest(suggestion) {
            document.getElementById('userMessage').value = suggestion; // Hiển thị câu hỏi gợi ý vào ô nhập
        }

        function sendMessage() {
            const userMessage = document.getElementById('userMessage').value;
            const chatBody = document.getElementById('chatBody');

            if (userMessage.trim() !== '') {
                // Hiển thị tin nhắn của người dùng
                const userMessageElement = document.createElement('div');
                userMessageElement.className = 'message user'; // Căn trái
                userMessageElement.textContent = userMessage;
                chatBody.appendChild(userMessageElement);

                // Xóa nội dung ô nhập
                document.getElementById('userMessage').value = '';

                // Tự động trả lời nếu là tin nhắn đầu tiên
                if (!firstMessageSent) {
                    const adminMessageElement = document.createElement('div');
                    adminMessageElement.className = 'message admin'; // Căn phải
                    adminMessageElement.textContent = 'Hãy đợi một lát, bộ phận chăm sóc khách hàng sẽ sớm liên hệ lại với bạn.';
                    chatBody.appendChild(adminMessageElement);
                    firstMessageSent = true; // Đánh dấu rằng tin nhắn đầu tiên đã được gửi
                }

                // Tự động trả lời dựa trên nội dung tin nhắn
                const adminResponse = getAdminResponse(userMessage);
                if (adminResponse) {
                    const adminMessageElement = document.createElement('div');
                    adminMessageElement.className = 'message admin'; // Căn phải
                    adminMessageElement.textContent = adminResponse;
                    chatBody.appendChild(adminMessageElement);
                }

                // Cuộn xuống cuối chat
                chatBody.scrollTop = chatBody.scrollHeight;
            }
        }

        // Hàm để lấy câu trả lời tự động từ admin
        function getAdminResponse(message) {
            const responses = {
                "giá sản phẩm": "Chào bạn! Bạn có thể xem giá sản phẩm trên trang sản phẩm của chúng tôi.",
                "thời gian giao hàng": "Thời gian giao hàng từ 3-5 ngày làm việc, tùy thuộc vào địa chỉ của bạn.",
                "khuyến mãi": "Không có tiền để mà khuyến mãi đâu anh bạn",
                "đổi trả sản phẩm": "Chúng tôi hỗ trợ đổi trả sản phẩm trong vòng 7 ngày nếu sản phẩm không bị hư hại.",
            };

            // Chuyển đổi message thành chữ thường để dễ kiểm tra
            message = message.toLowerCase();
            return responses[message] || "Xin lỗi, tôi không hiểu câu hỏi của bạn. Vui lòng thử lại!";
        }
    </script>
</body>

</html>
