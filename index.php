<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $logFile = __DIR__ . "/inquiry.csv"; // 現在のディレクトリ内の ocr.log に書き込む
        $entry = "$name,$email,$message\n"; // "<name>,<price>\n" の形式で記録
    
        // ファイルを開いて末尾に追記 (a = append)
        $file = fopen($logFile, "a");
    
        if ($file === false) {
            echo("Error: Could not open the log file.<br>");
        }
    
        // 書き込み
        fwrite($file, $entry);
    
        // ファイルを閉じる
        fclose($file);
    }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>株式会社Jecコンサルティング</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }
        header {
            background: linear-gradient(90deg, #0d6efd, #6610f2);
            color: white;
            padding: 50px 0;
            text-align: center;
        }
        header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }
        header p {
            font-size: 1.2rem;
        }
        .nav-link {
            color: white !important;
        }
        section {
            padding: 60px 15px;
        }
        .cta-button {
            background: #6610f2;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
        }
        footer {
            background: #f8f9fa;
            color: #333;
            padding: 20px 0;
            text-align: center;
        }
        footer a {
            color: #0d6efd;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header>
        <h1>株式会社Jecコンサルティング</h1>
        <p>未来を創造するコンサルティングサービス</p>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">私たちについて</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">サービス</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">お問い合わせ</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section id="about" class="text-center">
        <div class="container">
            <h2>私たちについて</h2>
            <p>株式会社Jecコンサルティングは、ビジネスの課題解決を専門とするコンサルティング会社です。<br>革新的なソリューションと確かな実績で、お客様の成功をサポートします。</p>
        </div>
    </section>

    <section id="services" class="bg-light text-center">
        <div class="container">
            <h2>サービス</h2>
            <p>私たちは以下のようなサービスを提供しています:</p>
            <div class="row">
                <div class="col-md-4">
                    <h3>経営コンサルティング</h3>
                    <p>企業成長を加速するための戦略策定。</p>
                </div>
                <div class="col-md-4">
                    <h3>ITソリューション</h3>
                    <p>最新テクノロジーを活用したデジタルトランスフォーメーション。</p>
                </div>
                <div class="col-md-4">
                    <h3>人材育成</h3>
                    <p>次世代のリーダーを育成するためのトレーニング。</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="text-center">
        <div class="container">
            <h2>お問い合わせ</h2>
            <p>以下のフォームからお気軽にお問い合わせください。</p>
            <form class="row g-3" action = "" method="POST">
                <div class="col-md-6">
                    <label for="name" class="form-label">お名前</label>
                    <input type="text" id="name" class="form-control" placeholder="例: 山田 太郎" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">メールアドレス</label>
                    <input type="email" id="email" class="form-control" placeholder="例: example@example.com" required>
                </div>
                <div class="col-12">
                    <label for="message" class="form-label">メッセージ</label>
                    <textarea id="message" class="form-control" rows="5" placeholder="ご質問やご相談内容をご記入ください。" required></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="cta-button">送信</button>
                </div>
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 株式会社Jecコンサルティング | <a href="#">プライバシーポリシー</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
