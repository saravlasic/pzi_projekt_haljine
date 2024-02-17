<div class="container-fluid page-body-wrapper">
    <div class="container welcome-container">
        <div class="blurry-window">
            <h2 class="welcome-heading">Pozdrav, Admine!</h2>
            <p class="welcome-text">Dobrodošli natrag. Idemo danas biti produktivni! 🚀</p>
            <p class="additional-message">Narudžbe čekaju na tvoju pažnju. Hajde da ih zajedno obradimo!</p>

            <div class="admin-quick-links">
                <h3 class="quick-links-heading">Brze Poveznice</h3>
                <div class="quick-links-list">
                    <a href="/showorder" class="quick-link-button">Pregled Narudžbi</a>
                    <a href="/uploadproduct" class="quick-link-button">Dodaj Novi Proizvod</a>
                    <a href="/showproduct" class="quick-link-button">Prikaži Sve Proizvode</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Arial', sans-serif;
        overflow: hidden;
    }

    .container-fluid {
        margin-top: 20px;
    }

    .welcome-container {
        position: relative;
        z-index: 2;
    }

    .blurry-window {
        background: rgba(220, 220, 220, 0.9); /* Svetlo sivkasta boja sa prozirnošću */
        border-radius: 10px;
        padding: 30px; /* Povećana visina */
        backdrop-filter: blur(10px);
        color: #333; /* Tamno siva boja teksta */
        text-align: center;
    }

    .welcome-heading {
        color: #1f618d; /* Tamno plava boja za naslov */
        font-size: 36px;
        margin-bottom: 10px;
    }

    .welcome-text {
        font-size: 18px;
        margin-bottom: 20px;
    }

    .admin-quick-links {
        margin-top: 20px;
    }

    .quick-links-heading {
        color: #1f618d; /* Tamno plava boja za naslov brzih poveznica */
        font-size: 28px;
        margin-bottom: 10px;
    }

    .quick-links-list {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        margin-top: 15px;
    }

    .quick-link-button {
        background-color: #1f618d;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }

    .quick-link-button:hover {
        background-color: #154360;
        color: #fff; 
    }

    .footer {
        background-color: #f8f9fa;
        padding: 10px;
        text-align: center;
        position: fixed;
        bottom: 0;
        width: 100%;
        color: #6c757d;
        border-top: 1px solid #dee2e6;
    }
    .additional-message {
        font-size: 16px;
        margin-top: 10px;
    }
</style>
