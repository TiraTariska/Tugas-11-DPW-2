<p>
                                Rp. {{$produk->harga}} |
                                Stok : {{$produk->stok}} |
                                Ukuran : {{$produk->ukuran}} |
                                Seller : {{$produk->seller->nama}} |
                                Tanggal Produksi : {{$produk->created_at->diffForHumans()}}
</p>