<div class="internet-connection-status" id="internetStatus"></div>
    <!-- Footer Nav-->
    <div class="footer-nav-area" id="footerNav">
      <div class="suha-footer-nav">
        <ul class="h-100 d-flex align-items-center justify-content-between ps-0 d-flex rtl-flex-d-row-r">
          <li><a href="home.php" onclick="showPleaseWait()"><i class="fa-solid fa-house"></i>Home</a></li>
          <li><a href="scan.php" onclick="showPleaseWait()"><i class="fa-solid fa-camera"></i>Scanner</a></li>
          <li><a href="external-stock-transfer-list.php" onclick="showPleaseWait()"><i class="fa-solid fa-book"></i>Stock Transfer</a></li>
          <li><a href="purchase-entry-list.php" onclick="showPleaseWait()"><i class="fa-solid fa-barcode"></i>Purchase Entry</a></li>
        </ul>
      </div>
    </div>
     <div id="pleaseWaitModal" class="modal">
        <div class="modal-content">
            <div class="modal-body">
               <img src="data-loading.gif" alt="Loading">
            </div>
        </div>
    </div>
    <script>
        function showPleaseWait() {
            $('#pleaseWaitModal').modal('show'); // Show the modal pop-up
            $.ajax({
                url: 'your_php_script.php',
                method: 'GET',
                success: function(response) {
                    $('#pleaseWaitModal').modal('hide'); // Hide the modal pop-up on success
                    // Process the response or update the UI as needed
                    // ...
                },
                error: function() {
                    $('#pleaseWaitModal').modal('hide'); // Hide the modal pop-up on error
                    // Handle the error condition
                    // ...
                }
            });
        }
    </script>
      </div>
              <style>
        .modal {
            display: none;
            /* Hide the modal by default */
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            /* Semi-transparent black background */
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 300px;
            text-align: center;
        }
    </style>