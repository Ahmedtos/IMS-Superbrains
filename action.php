<?php
session_start();
include 'Inventory.php';
$inventory = new Inventory();
//if below statment return true then it will send user to the login.php page
if(!empty($_GET['action']) && $_GET['action'] == 'logout') {
	session_unset();
	session_destroy();
	header("Location:index.php");
}
if(!empty($_POST['action']) && $_POST['action'] == 'getInventoryDetails') {
	$inventory->getInventoryDetails();
}
// Customer management
if(!empty($_POST['action']) && $_POST['action'] == 'customerList') {
	$inventory->getCustomerList();
}
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'customerAdd'){
	$inventory->saveCustomer();
}
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'getCustomer'){
	$inventory->getCustomer();
}
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'customerUpdate'){
	$inventory->updateCustomer();
}
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'customerDelete'){
	$inventory->deleteCustomer();
}
// Category management
if(!empty($_POST['action']) && $_POST['action'] == 'categoryList') {
	$inventory->getCategoryList();
}
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'categoryAdd'){
	$inventory->saveCategory();
}
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'getCategory'){
	$inventory->getCategory();
}
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'updateCategory'){
	$inventory->updateCategory();
}
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'deleteCategory'){
	$inventory->deleteCategory();
}
// Brand management
if(!empty($_POST['action']) && $_POST['action'] == 'listBrand') {
	$inventory->getBrandList();
}
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'addBrand'){
	$inventory->saveBrand();
}
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'getBrand'){
	$inventory->getBrand();
}
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'updateBrand'){
	$inventory->updateBrand();
}
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'deleteBrand'){
	$inventory->deleteBrand();
}
// Product management actie post in de applicatie
if(!empty($_POST['action']) && $_POST['action'] == 'listProduct') {
	$inventory->getProductList();
}
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'getCategoryBrand') {
	echo $inventory->getCategoryBrand($_POST['categoryid']);
// haalt de categorie brand op
}
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'addProduct') {
	$inventory->addProduct();
}
// voegt item toe met de knop "Add Product"
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'getProductDetails') {
	$inventory->getProductDetails();
}
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'updateProduct'){
	$inventory->updateProduct();
}
// Update/Wijzigt item met de knop "Update" onder de kollom van "Action"
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'deleteProduct'){
	$inventory->deleteProduct();
// Verwijdert item met de knop "Delete" onder de kollom van "Action"
}
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'viewProduct'){
	$inventory->viewProductDetails();
}
// manage supplier
if(!empty($_POST['action']) && $_POST['action'] == 'supplierList') {
	$inventory->getSupplierList();
}
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'addSupplier'){
	$inventory->addSupplier();
}
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'getSupplier'){
	$inventory->getSupplier();
}
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'updateSupplier'){
	$inventory->updateSupplier();
}
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'deleteSupplier'){
	$inventory->deleteSupplier();
}
// manage purchase
if(!empty($_POST['action']) && $_POST['action'] == 'listPurchase') {
	$inventory->listPurchase();
}
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'addPurchase'){
	$inventory->addPurchase();
}
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'getPurchaseDetails'){
	$inventory->getPurchaseDetails();
}
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'updatePurchase'){
	$inventory->updatePurchase();
}
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'deletePurchase'){
	$inventory->deletePurchase();
}
// manage purchase
if(!empty($_POST['action']) && $_POST['action'] == 'listOrder') {
	$inventory->listOrders();
}
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'addOrder'){
	$inventory->addOrder();
}
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'getOrderDetails'){
	$inventory->getOrderDetails();
}
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'updateOrder'){
	$inventory->updateOrder();
}
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'deleteOrder'){
	$inventory->deleteOrder();
}
