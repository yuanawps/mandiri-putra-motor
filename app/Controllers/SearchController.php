<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class SearchController extends Controller
{
    protected $produkModel; // Define the property to hold the model instance

    public function __construct()
    {
        // Load the ProdukModel in the constructor
        $this->produkModel = new \App\Models\ProdukModel(); // Adjust the namespace and class name as per your actual model
    }

    public function handleSearchResults()
    {
        // Example: Retrieving search results from POST data
        $searchResults = $this->request->getPost('q');

        // Example: Fetching data for $produk from your model
        $produk = $this->produkModel->findAll(); // Replace with actual method to fetch data

        // Pass both $searchResults and $produk to your view
        return view('search_results', [
            'searchResults' => $searchResults,
            'produk' => $produk, // Ensure $produk is defined with appropriate data
        ]);
    }
}
