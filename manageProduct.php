<?php
	session_start();
    if(!isset($_SESSION['userName'])){
        header("location: login.php");
    }
    include './controller/manageData.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mirielle's Invoice System || Manage Product</title>
    <?php include './webpart/head.php';?>
</head>
<body class="main-bg">
    <?php include './webpart/sidebar.php'?>
    <main class="container pt-5">
        <div class="d-flex flex-column justify-content-center align-items-center vh-100">
            <div class="p-5 bg-white rounded mb-5 w-100">
            <h3 class="mb-4"><span class="material-symbols-outlined mx-2" id="cust_icon">inventory</span>Show Product</h3>
            <table class="table table-bordered table-hover table-striped" id="invoice_table">
			    		<thead class="text-center">
			    			<tr>
			    				<th>
			    					<h6>#</h6>
			    				</th>
			    				<th>
			    					<h6>Product Name</h6>
			    				</th>
			    				<th>
			    					<h6>Product Name</h6>
			    				</th>
			    				<th>
			    					<h6>Price</h6>
			    				</th>
			    				<th>
			    					<h6>Image</h6>
			    				</th>
			    				<th>
			    					<h6>Action</h6>
			    				</th>
			    			</tr>
			    		</thead>
			    		<tbody>
                            <?php showProduct();?>
                        </tbody>
			    	</table>
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
            <!-- Modal -->
            <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
			          <div class="modal-content">
			            <div class="modal-header">
						<h1 class="modal-title fs-5" id="modalLabel"><span class="material-symbols-outlined me-2">inventory</span>Product Edit:</h1>
			              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			            </div>
			            <div class="modal-body">
			              ...
			            </div>
			            <div class="modal-footer d-flex justify-content-between">
							<button id="deleteBtn" type="button" class="btn btn-danger">Delete</button>
			              	<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Done</button>
			            </div>
			          </div>
			        </div>
			      </div>
            </div>
        </div>
    </main>
	<script src="./assets/script/modalbox.js"></script>
</body>
</html>