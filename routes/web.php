<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',['as'=>'404','uses'=>'HomeController@notFound']);
Auth::routes();
Route::get('/logout',function (){
    Auth::logout();
    return redirect('home');
});
Route::get('/disallow', ['as'=>'disallow','uses'=>'HomeController@disallow']);
Route::group(['prefix' => 'admin','middleware' =>['auth','admin']],function (){
    Route::get('/',['as'=>'admin','uses'=>'Front\Admin\adminController@index']);
    Route::get('/ayarlar',['as'=>'admin.ayarlar','uses'=>'Front\Admin\adminConfigController@ayarlar']);
    Route::post('/ayarlar',['as'=>'admin.ayarlar','uses'=>'Front\Admin\adminConfigController@ayarlar_post']);
    Route::get('/sliderlar',['as'=>'admin.sliderlar','uses'=>'Front\Admin\adminSliderController@slider']);
    Route::get('/sliderlar/activator/{id}',['as'=>'admin.sliderlar.activator','uses'=>'Front\Admin\adminSliderController@activator']);
    Route::get('/sliderlar/delete/{id}',['as'=>'admin.sliderlar.delete','uses'=>'Front\Admin\adminSliderController@delete']);
    Route::get('/sliderlar/update/{id}',['as'=>'admin.sliderlar.update','uses'=>'Front\Admin\adminSliderController@update']);
    Route::post('/sliderlar/update/{id}',['as'=>'admin.sliderlar.update','uses'=>'Front\Admin\adminSliderController@update_post']);
    Route::get('/sliderlar/add',['as'=>'admin.sliderlar.add','uses'=>'Front\Admin\adminSliderController@addSlide']);
    Route::post('/sliderlar/add',['as'=>'admin.sliderlar.add','uses'=>'Front\Admin\adminSliderController@addSlider']);
    Route::get('/menuler',['as'=>'admin.menuler','uses'=>'Front\Admin\adminMenuController@menuler']);
    Route::get('/menuler/activator/{id}',['as'=>'admin.menuler.activator','uses'=>'Front\Admin\adminMenuController@activatorMenu']);
    Route::get('/menuler/activatorsub/{id}',['as'=>'admin.menuler.activatorsub','uses'=>'Front\Admin\adminMenuController@activatorAltMenu']);
    Route::get('/menuler/delete/{id}',['as'=>'admin.menuler.delete','uses'=>'Front\Admin\adminMenuController@deleteMenu']);
    Route::get('/menuler/deletesub/{id}',['as'=>'admin.menuler.deletesub','uses'=>'Front\Admin\adminMenuController@deleteSubMenu']);
    Route::get('/menuler/update/{id}',['as'=>'admin.menuler.update','uses'=>'Front\Admin\adminMenuController@menuUpdate']);
    Route::get('/menuler/updatesub/{id}',['as'=>'admin.menuler.updatesub','uses'=>'Front\Admin\adminMenuController@menuUpdateSub']);
    Route::post('/menuler/update/{id}',['as'=>'admin.menuler.update','uses'=>'Front\Admin\adminMenuController@menuUpdatePost']);
    Route::post('/menuler/updatesub/{id}',['as'=>'admin.menuler.updatesub','uses'=>'Front\Admin\adminMenuController@menuUpdateSubPost']);
    Route::get('/menuler/addsub/{id}',['as'=>'admin.menuler.addsub','uses'=>'Front\Admin\adminMenuController@menusubAdd']);
    Route::post('/menuler/addsub/{id}',['as'=>'admin.menuler.addsub','uses'=>'Front\Admin\adminMenuController@menusubAddPost']);
    Route::get('/menuler/add',['as'=>'admin.menuler.add','uses'=>'Front\Admin\adminMenuController@menuAdd']);
    Route::post('/menuler/add',['as'=>'admin.menuler.add','uses'=>'Front\Admin\adminMenuController@menuAddPost']);




});
Route::group(['prefix' => 'panel', 'middleware' => ['auth','disallow']], function () {
    Route::get('/',['as'=>'panel','uses'=>'Back\Main\panel@index']);
    Route::get('/musteriler/',['as'=>'panel.musteriler','uses'=>'Back\Sales\customersController@list']);
    Route::get('/giderler/',['as'=>'panel.giderler','uses'=>'Back\Expenses\expensesController@list']);
    Route::get('/tedarikciler/',['as'=>'panel.tedarikciler','uses'=>'Back\Expenses\suppliersController@list']);
    Route::get('/calisanlar/',['as'=>'panel.calisanlar','uses'=>'Back\Expenses\workersController@list']);
    Route::get('/kasavebankalar/',['as'=>'panel.kasavebankalar','uses'=>'Back\Cash\banksController@list']);
    Route::get('/filterCalisanlar/',['as'=>'panel.filtrecalisanlar','uses'=>'Back\Expenses\workersController@filter']);
    Route::get('/filterTedarikciler/',['as'=>'panel.filtretedarikciler','uses'=>'Back\Expenses\suppliersController@filter']);
    Route::get('/filterGiderler/',['as'=>'panel.filtregiderler','uses'=>'Back\Expenses\expensesController@filtre']);
    Route::get('/filterFaturalar/',['as'=>'panel.filtrefaturalar','uses'=>'Back\Sales\invoicesController@filter']);
    Route::get('/filterUrunler/',['as'=>'panel.filtreurunler','uses'=>'Back\Stock\productsController@filter']);
    Route::get('/filterStoklar/',['as'=>'panel.filtrestok','uses'=>'Back\Stock\stocksController@filter']);
    Route::get('/filterMusteri/',['as'=>'panel.filtremusteri','uses'=>'Back\Sales\customersController@filter']);





    Route::get('/autoCompleteSuppliers',['as'=>'autocomplete.suppliers','uses'=>'Back\Expenses\expensesInvoiceAddController@autoComplete']);
    Route::get('/autoCompleteWorkers',['as'=>'autocomplete.workers','uses'=>'Back\Expenses\expensesSalaryAddController@autoComplete']);
    Route::get('/autoCompleteCustomers',['as'=>'autocomplete.customers','uses'=>'Back\Sales\customersController@autoComplete']);
    Route::get('/autoCompleteProducts',['as'=>'autocomplete.products','uses'=>'Back\Stock\productsController@autoComplete']);








    Route::group(['prefix' => 'ayarlar', 'middleware' => 'auth'], function(){
        Route::get('/',['as'=>'ayarlar','uses'=>'ayarlar\kategoriveEtiketler@index']);
        Route::get('/kategoriveEtiketler/',['as'=>'ayarlar.kategoriveEtiketler','uses'=>'ayarlar\kategoriveEtiketlerController@ekle']);
        Route::post('/kategoriveEtiketler/',['as'=>'ayarlar.kategoriveEtiketler','uses'=>'ayarlar\kategoriveEtiketlerController@ekle_post']);
    });


    Route::group(['prefix' => 'satislar', 'middleware' => 'auth'],function(){
        Route::get('/',['as'=>'satislar','uses'=>'Back\Sales\invoicesController@list']);
        Route::get('/fatura-ekle',['as'=>'satislar.faturaekle','uses'=>'Back\Sales\invoicesAddController@add_get']);
        Route::post('/fatura-ekle',['as'=>'satislar.faturaekle','uses'=>'Back\Sales\invoicesAddController@add_post']);
        Route::get('/faturaDetay/{id}',['as'=>'satislar.faturadetay','uses'=>'Back\Sales\invoicesDetailController@show']);
        Route::get('/musteri-ekle',['as'=>'satislar.musteriekle','uses'=>'Back\Sales\customersAddController@add_get']);
        Route::get('/musteri-duzenle/{id}',['as'=>'satislar.musteriduzenle','uses'=>'Back\Sales\customersEditController@edit_get']);
        Route::get('/musteri-sil/{id}',['as'=>'satislar.musterisil','uses'=>'Back\Sales\customersDeleteController@delete']);
        Route::get('/fatura-sil/{id}',['as'=>'satislar.faturasil','uses'=>'Back\Sales\invoicesDeleteController@delete']);
        Route::get('/fatura-duzenle/{id}',['as'=>'satislar.faturaduzenle','uses'=>'Back\Sales\invoicesEditController@edit_get']);
        Route::post('/fatura-duzenle/{id}',['as'=>'satislar.faturaduzenle','uses'=>'Back\Sales\invoicesEditController@edit_post']);

        Route::post('/musteri-duzenle/{id}',['as'=>'satislar.musteriduzenlepost','uses'=>'Back\Sales\customersEditController@edit_post']);
        Route::post('/musteri-ekle',['as'=>'satislar.musteriekle','uses'=>'Back\Sales\customersAddController@add_post']);
        Route::get('/musteriDetay/{id}',['as'=>'satislar.musteriDetay','uses'=>'Back\Sales\customersDetailController@show']);
        Route::post('/odeme-ekle/{id}',['as'=>'satislar.odemeekle','uses'=>'Back\Sales\paymentsController@add']);


    });
    Route::group(['prefix' => 'stok', 'middleware' => 'auth'],function(){

        Route::get('/hizmetveurunler/',['as'=>'stok.hizmetveurunler','uses'=>'Back\Stock\productsController@list']);
        Route::get('/hizmetveurunekle/',['as'=>'stok.hizmetveurunekle','uses'=>'Back\Stock\productsAddController@add_get']);
        Route::post('/hizmetveurunekle/',['as'=>'stok.hizmetveurunekle','uses'=>'Back\Stock\productsAddController@add_post']);
        Route::get('/urunDetay/{id}',['as'=>'stok.urundetay','uses'=>'Back\Stock\productsDetailController@detail']);
        Route::get('/urun-duzenle/{id}',['as'=>'stok.urunduzenle','uses'=>'Back\Stock\productsEditController@edit_get']);
        Route::post('/urun-duzenle/{id}',['as'=>'stok.urunduzenlepost','uses'=>'Back\Stock\productsEditController@edit_post']);
        Route::get('/urun-sil/{id}',['as'=>'stok.urunsil','uses'=>'Back\Stock\productsDeleteController@delete']);
        Route::get('/stokhareketleri/',['as'=>'panel.stokhareketleri','uses'=>'Back\Stock\stocksController@list']);
        Route::get('/stok-detay/{id}',['as'=>'stok.stokdetay','uses'=>'stok\stokHareketleriController@listele']);
        Route::get('/stok-giris/',['as'=>'stok.stokgiris','uses'=>'Back\Stock\stocksAddInController@add_get']);
        Route::post('/stok-giris/',['as'=>'stok.stokgiris','uses'=>'Back\Stock\stocksAddInController@add_post']);
        Route::post('/stok-cikis/',['as'=>'stok.stokcikis','uses'=>'Back\Stock\stocksAddOutController@add_post']);
        Route::get('/stok-cikis/',['as'=>'stok.stokcikis','uses'=>'Back\Stock\stocksAddOutController@add_get']);
        Route::get('/stokgiris-sil/{id}',['as'=>'stok.stokgirissil','uses'=>'Back\Stock\stocksDeleteInController@delete']);
        Route::get('/stokcikis-sil/{id}',['as'=>'stok.stokcikissil','uses'=>'Back\Stock\stocksDeleteOutController@delete']);

        Route::get('/stokgiris-detay/{id}',['as'=>'stok.stokgirisdetay','uses'=>'Back\Stock\stocksDetailInController@show']);
        Route::get('/stokcikis-detay/{id}',['as'=>'stok.stokcikisdetay','uses'=>'Back\Stock\stocksDetailOutController@show']);

        Route::get('/stokgiris-duzenle/{id}',['as'=>'stok.stokgirisduzenle','uses'=>'Back\Stock\stocksEditInController@edit_get']);
        Route::post('/stokgiris-duzenle/{id}',['as'=>'stok.stokgirisduzenle','uses'=>'Back\Stock\stocksEditInController@edit_post']);
        Route::get('/stokcikis-duzenle/{id}',['as'=>'stok.stokcikisduzenle','uses'=>'Back\Stock\stocksEditOutController@edit_get']);
        Route::post('/stokcikis-duzenle/{id}',['as'=>'stok.stokcikisduzenle','uses'=>'Back\Stock\stocksEditOutController@edit_post']);









    });

  


    Route::group(['prefix' => 'giderler', 'middleware' => 'auth'],function(){
        Route::get('/fisfatura-ekle',['as'=>'giderler.fisfaturaEkle','uses'=>'Back\Expenses\expensesInvoiceAddController@add_get']);
        Route::post('/fisfatura-ekle',['as'=>'giderler.fisfaturaEkle','uses'=>'Back\Expenses\expensesInvoiceAddController@add_post']);
        Route::get('/maasprim-ekle',['as'=>'giderler.maasprimEkle','uses'=>'Back\Expenses\expensesSalaryAddController@add_get']);
        Route::post('/maasprim-ekle',['as'=>'giderler.maasprimEkle','uses'=>'Back\Expenses\expensesSalaryAddController@add_post']);
        Route::get('/fisfatura-duzenle/{id}',['as'=>'giderler.fisfaturaDuzenle','uses'=>'Back\Expenses\expensesInvoiceEditController@edit_get']);
        Route::post('/fisfatura-duzenle/{id}',['as'=>'giderler.fisfaturaDuzenle','uses'=>'Back\Expenses\expensesInvoiceEditController@edit_post']);


        Route::get('/tedarikci-ekle',['as'=>'giderler.tedarikciEkle','uses'=>'Back\Expenses\suppliersAddController@add_get']);
        Route::post('/tedarikci-ekle',['as'=>'giderler.tedarikciEkle','uses'=>'Back\Expenses\suppliersAddController@add_post']);
        Route::get('/tedarikci-detay/{id}',['as'=>'giderler.tedarikciDetay','uses'=>'Back\Expenses\suppliersDetailController@show']);
        Route::get('/tedarikci-sil/{id}',['as'=>'giderler.tedarikciSil','uses'=>'Back\Expenses\suppliersDeleteController@delete']);
        Route::get('/tedarikci-duzenle/{id}',['as'=>'giderler.tedarikciDuzenle','uses'=>'Back\Expenses\suppliersEditController@edit_get']);
        Route::patch('/tedarikci-duzenle/{id}',['as'=>'giderler.tedarikciDuzenle','uses'=>'Back\Expenses\suppliersEditController@edit_post']);
        Route::get('/calisan-ekle',['as'=>'giderler.calisanEkle','uses'=>'Back\Expenses\workersAddController@add_get']);
        Route::post('/calisan-ekle',['as'=>'giderler.calisanEkle','uses'=>'Back\Expenses\workersAddController@add_post']);
        Route::get('/calisan-duzenle/{id}',['as'=>'giderler.calisanDuzenle','uses'=>'Back\Expenses\workersEditController@edit_get']);
        Route::patch('/calisan-duzenle/{id}',['as'=>'giderler.calisanDuzenle','uses'=>'Back\Expenses\workersEditController@edit_post']);
        Route::get('/calisan-sil/{id}',['as'=>'giderler.calisanSil','uses'=>'Back\Expenses\workersDeleteController@delete']);
        Route::get('/calisan-detay/{id}',['as'=>'giderler.calisanDetay','uses'=>'Back\Expenses\workersDetailController@get_detail']);

        Route::get('/maasprim-duzenle/{id}',['as'=>'giderler.maasprimDuzenle','uses'=>'Back\Expenses\expensesSalaryEditController@edit_get']);
        Route::post('/maasprim-duzenle/{id}',['as'=>'giderler.maasprimDuzenle','uses'=>'Back\Expenses\expensesSalaryEditController@edit_post']);
        Route::get('/bankagider-ekle',['as'=>'giderler.bankagiderEkle','uses'=>'Back\Expenses\expensesBankAddController@add_get']);
        Route::post('/bankagider-ekle',['as'=>'giderler.bankagiderEkle','uses'=>'Back\Expenses\expensesBankAddController@add_post']);
        Route::get('/bankagider-duzenle/{id}',['as'=>'giderler.bankagiderDuzenle','uses'=>'Back\Expenses\expensesBankEditController@edit_get']);
        Route::post('/bankagider-duzenle/{id}',['as'=>'giderler.bankagiderDuzenle','uses'=>'Back\Expenses\expensesBankEditController@edit_post']);
        Route::get('/vergi-ekle',['as'=>'giderler.vergiEkle','uses'=>'Back\Expenses\expensesTaxAddController@add_get']);
        Route::post('/vergi-ekle',['as'=>'giderler.vergiEkle','uses'=>'Back\Expenses\expensesTaxAddController@add_post']);
        Route::get('/vergi-duzenle/{id}',['as'=>'giderler.vergiDuzenle','uses'=>'Back\Expenses\expensesTaxEditController@edit_get']);
        Route::post('/vergi-duzenle/{id}',['as'=>'giderler.vergiDuzenle','uses'=>'Back\Expenses\expensesTaxEditController@edit_post']);

        Route::get('/vergi-detay/{id}',['as'=>'giderler.vergiDetay','uses'=>'Back\Expenses\expensesTaxDetailController@detail']);
        Route::get('/maas-detay/{id}',['as'=>'giderler.maasDetay','uses'=>'Back\Expenses\expensesSalaryDetailController@detail']);
        Route::get('/banka-detay/{id}',['as'=>'giderler.bankaDetay','uses'=>'Back\Expenses\expensesBankDetailController@detail']);
        Route::get('/fisfatura-detay/{id}',['as'=>'giderler.fisfaturaDetay','uses'=>'Back\Expenses\expensesInvoiceDetailController@detail']);
        Route::get('/banka-sil/{id}',['as'=>'giderler.bankasil','uses'=>'Back\Expenses\expensesBankDeleteController@delete']);
        Route::get('/vergi-sil/{id}',['as'=>'giderler.vergisil','uses'=>'Back\Expenses\expensesTaxDeleteController@delete']);
        Route::get('/maas-sil/{id}',['as'=>'giderler.maassil','uses'=>'Back\Expenses\expensesSalaryDeleteController@delete']);
        Route::get('/fatura-sil/{id}',['as'=>'giderler.faturasil','uses'=>'Back\Expenses\expensesInvoiceDeleteController@delete']);
        Route::post('/odeme-ekle/{id}',['as'=>'giderler.odemeekle','uses'=>'Back\Expenses\paymentsController@add']);
        Route::post('/maas-odeme-ekle/{id}',['as'=>'giderler.maasodemeekle','uses'=>'Back\Expenses\expensesSalaryDetailController@add_payment']);
        Route::post('/vergi-odeme-ekle/{id}',['as'=>'giderler.vergiodemeekle','uses'=>'Back\Expenses\expensesTaxDetailController@add_payment']);
        Route::post('/banka-odeme-ekle/{id}',['as'=>'giderler.bankaodemeekle','uses'=>'Back\Expenses\expensesBankDetailController@add_payment']);









    });

    





    Route::group(['prefix' => 'nakit', 'middleware' => 'auth'], function(){
        Route::get('/kasa-ekle',['as'=>'nakit.kasaekle','uses'=>'Back\Cash\safesAddController@add_get']);
        Route::post('/kasa-ekle',['as'=>'nakit.kasaekle','uses'=>'Back\Cash\safesAddController@add_post']);
        Route::get('/banka-ekle',['as'=>'nakit.bankaekle','uses'=>'Back\Cash\banksAddController@add_get']);
        Route::post('/banka-ekle',['as'=>'nakit.bankaekle','uses'=>'Back\Cash\banksAddController@add_post']);
        Route::get('/kasa-duzenle/{id}',['as'=>'nakit.kasaduzenle','uses'=>'Back\Cash\safesEditController@edit_get']);
        Route::post('/kasa-duzenle/{id}',['as'=>'nakit.kasaduzenle','uses'=>'Back\Cash\safesEditController@edit_post']);
        Route::get('/banka-duzenle/{id}',['as'=>'nakit.bankaduzenle','uses'=>'Back\Cash\banksEditController@edit_get']);
        Route::post('/banka-duzenle/{id}',['as'=>'nakit.bankaduzenle','uses'=>'Back\Cash\banksEditController@edit_post']);
        Route::get('/kasa-detay/{id}',['as'=>'nakit.kasadetay','uses'=>'Back\Cash\safesDetailController@show']);
        Route::get('/banka-detay/{id}',['as'=>'nakit.bankadetay','uses'=>'Back\Cash\banksDetailController@show']);
        Route::get('/kasasil/{id}',['as'=>'nakit.kasasil','uses'=>'Back\Cash\safesDeleteController@delete']);
        Route::get('/bankasil/{id}',['as'=>'nakit.bankasil','uses'=>'Back\Cash\banksDeleteController@delete']);







    });

    Route::group(['prefix' => 'map', 'middleware' => 'auth'],function(){
        Route::get('/',['as'=>'map','uses'=>'Back\Map\homeController@map']);
    });




});
Route::get('{slug}',['as'=>'404','uses'=>'HomeController@notFound']);