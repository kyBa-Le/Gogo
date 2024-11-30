<?php
?>
<div id="loading" style="display: none;">
    <div class="spinner"></div>
    <p>Processing your request...</p>
</div>
<style>
    .spinner {
        width: 40px;
        height: 40px;
        border: 4px solid #f3f3f3;
        border-top: 4px solid #3498db;
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    #loading {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        background: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 10px;
        z-index: 1000;
    }
</style>
