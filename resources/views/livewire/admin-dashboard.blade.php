<div>
    <livewire:bread-crumb :url="$currentUrl"/>
    <div class="welcome-message">
        <h1>Selamat Datang!</h1>
        <p>ini adalah halaman khusus untuk admin</p>
    </div>
    
    <style>
        .welcome-message {
            text-align: center;
            margin-top: 50px;
        }
    
        h1 {
            color: #4CAF50;
        }
    
        p {
            font-size: 18px;
        }
    </style>
</div>
