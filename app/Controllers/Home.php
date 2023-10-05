<?php

namespace App\Controllers;
use App\Models\ProductModel;
class Home extends BaseController
{
    public function __construct(){
        $this->productmodel=new \App\Models\ProductModel();
    }

    public function homepage(): string
    {
        return view('user/homepage');
    }

    public function admin(): string
    {
        return view('admin/adminindex');
    }

    public function table(){
        $data=[
            'product'=>$this->productmodel->where('productCategory', 'Table')->findAll(),
        ];
        return view('user/products', $data);
    }
    public function chair(){
        $data=[
            'product'=>$this->productmodel->where('productCategory', 'Chair')->findAll(),
        ];
        return view('user/products', $data);
    }
    public function sofa(){
        $data=[
            'product'=>$this->productmodel->where('productCategory', 'Sofa')->findAll(),
        ];
        return view('user/products', $data);
    }
    public function bed(){
        $data=[
            'product'=>$this->productmodel->where('productCategory', 'Bed')->findAll(),
        ];
        return view('user/products', $data);
    }
    public function wardrobe(){
        $data=[
            'product'=>$this->productmodel->where('productCategory', 'Wardrobe')->findAll(),
        ];
        return view('user/products', $data);
    }
    public function cabinet(){
        $data=[
            'product'=>$this->productmodel->where('productCategory', 'Cabinet')->findAll(),
        ];
        return view('user/products', $data);
    }
    public function stool(){
        $data=[
            'product'=>$this->productmodel->where('productCategory', 'Stool')->findAll(),
        ];
        return view('user/products', $data);
    }
    public function officechair(){
        $data=[
            'product'=>$this->productmodel->where('productCategory', 'OfficeChair')->findAll(),
        ];
        return view('user/products', $data);
    }


    public function adminindex()
    {
        $data = [
            'menu' => $this->productmodel->findAll(),
        ];
        return view('admin/adminindex', $data);

    }
    public function saveProduct()
    {
    
        // Get the uploaded image file
        $productImage = $this->request->getFile('productImage');
        $myNewName = $productImage->getRandomName();
    
        // Validate the uploaded image
        if ($productImage->move("uploads", $myNewName)) {
            // Generate a unique filename for the uploaded image
    
            // Insert product data into the database, including the image file path
            $data = [
                'code' => $this->request->getVar('code'),
                'quantity' => $this->request->getVar('quantity'),
                'productName' => $this->request->getVar('productName'),
                'productPrice' => $this->request->getVar('productPrice'),
                'productDescription' => $this->request->getVar('productDescription'),
                'productImage' => "uploads/" . $myNewName,
                'productCategory' => $this->request->getVar('productCategory'),
            ];       
    
            if ($this->productmodel->insert($data)) {
                return redirect()->to('adminindex');
            }
        } else {
            // Handle the case where the image upload was not successful
            $error = $productImage->getError();
            return redirect()->to('error_page'); // Redirect to an error page or display an error message
        }
    }

    public function editProduct()
    {
        $id = $this->request->getPost('id');
        $data = [
            'code' => $this->request->getPost('code'),
            'productName' => $this->request->getPost('productName'),
            'productDescription' => $this->request->getPost('productDescription'),
            'productPrice' => $this->request->getPost('productPrice'),
            'productCategory' => $this->request->getPost('productCategory'),
            'quantity' => $this->request->getPost('quantity'),
        ];
    
        if ($this->productmodel->update($id, $data)) {
            echo "Product updated successfully"; // Debugging message
            return redirect()->to('adminindex');
        } else {
            echo "Product update failed"; // Debugging message
        }
    }
    public function deletethistoo()
    {
        $id = $this->request->getPost('id');
        
        $productModel = new ProductModel(); // Create an instance of the product model
        if ($productModel->delete($id)) { // Use the instance to call the delete method
            return redirect()->to('adminindex');
        }
    }
        
}
