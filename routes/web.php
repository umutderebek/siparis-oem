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


Auth::routes();

Route::get('deex','denemecontroller@java');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login','Auth\LoginController@loginform')->name('login');


Route::prefix('profile')->group(function () {
    Route::get('/', 'HomeController@profile')->name('user.profile');
    Route::get('/dropdownlist/getstates/{id}', 'HomeController@getStates');
    Route::post('/kaydet/{id?}', 'denemecontroller@kaydet')->name('user.profile.kaydet');

});


Route::get('change-password','HomeController@sifreform')->name('user.password');
Route::post('change-password','HomeController@Showcphl');

Route::get('change-email','HomeController@emailform')->name('user.email');
Route::post('change-email','HomeController@mailsjsj')->name('emaildegistir');

Route::prefix('deneme')->group(function () {
    Route::post('/kaydet/{id?}', 'denemecontroller@kaydet')->name('dene.profile.kaydet');
});

Route::get('/','SayfaController@index')->name('anasayfa');



Route::get('contact-us','SayfaController@iletisim')->name('contact-us');

Route::post('contact-us','SayfaController@mail')->name('contact.mail.store');

Route::post('subs-us','SayfaController@subs')->name('subs.mail.store');

Route::get('/about-us','SayfaController@hakkimda')->name('about-us');

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');



Route::group( ['prefix'=> 'cart'],function ()
{
    Route::get('/','Eticaret\SepetController@sepet')->name('cart');
    Route::post('/ekle','Eticaret\SepetController@ekle')->name('cart.ekle');
    Route::get('/kaldir/{rowid}','Eticaret\SepetController@kaldir')->name('cart.kaldir');
    Route::get('/bosalt','Eticaret\SepetController@bosalt')->name('cart.bosalt');
    Route::patch('/guncelle/{rowid}','Eticaret\SepetController@guncelle')->name('cart.guncelle');
});

//Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::post('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
});


Route::group(['prefix' => 'Admin-contact'], function ()
{
    Route::match(['get','post'],'/','Admin\Contact\ContactController@index')->name('admin.contact.index');
    Route::get('/show/{id}','Admin\Contact\ContactController@show')->name('admin.contact.show');
    Route::get('/sil/{id}','Admin\Contact\ContactController@sil')->name('admin.contact.sil');
});



Route::group(['prefix' => 'Admin-urun-kategori'], function ()
{
    Route::match(['get','post'],'/','Admin\Urun\AdminUrunKategoriController@index')->name('admin.urunkategori.index');
    Route::get('/yeni','Admin\Urun\AdminUrunKategoriController@form')->name('admin.urunkategori.yeni');
    Route::get('/duzenle/{id}','Admin\Urun\AdminUrunKategoriController@edit')->name('admin.urunkategori.duzenle');
    Route::post('/kaydet/{id?}','Admin\Urun\AdminUrunKategoriController@kaydet')->name('admin.urunkategori.kaydet');
    Route::post('/guncelle/{id?}','Admin\Urun\AdminUrunKategoriController@guncelle')->name('admin.urunkategori.guncelle');
    Route::get('/sil/{id}','Admin\Urun\AdminUrunKategoriController@sil')->name('admin.urunkategori.sil');
});


Route::group(['prefix' => 'Admin-urun'], function ()
{
    Route::match(['get','post'],'/','Admin\Urun\AdminUrunController@index')->name('admin.urun');
    Route::get('/yeni','Admin\Urun\AdminUrunController@form')->name('admin.urun.yeni');
    Route::get('/duzenle/{id}','Admin\Urun\AdminUrunController@edit')->name('admin.urun.duzenle');
    Route::post('/kaydet/{id?}','Admin\Urun\AdminUrunController@kaydet')->name('admin.urun.kaydet');
    Route::post('/guncelle/{id?}','Admin\Urun\AdminUrunController@guncelle')->name('admin.urun.guncelle');
    Route::get('/sil/{id}','Admin\Urun\AdminUrunController@sil')->name('admin.urun.sil');
});

//E Ticaret Linkler


Route::get('/category/{slug_kategoriadi}','Eticaret\KategoriController@index')->name('kategori');


Route::get('/product/{slug_urunadi}','Eticaret\UrunController@urun')->name('urun');

Route::get('/order','Eticaret\OdemeController@index')->name('odeme');
Route::post('order','Eticaret\OdemeController@order')->name('odemeyap');

Route::get('/requested-order','Eticaret\RequestOrder@index')->name('siparisler');
Route::get('/order-details/{id}','Eticaret\RequestOrder@detay')->name('siparis');



Route::get('/admin-tema-ayarlari','Tema\TemaController@temaayar')->name('admintema.getir');

Route::post('/admin-tema-ayarlari/kaydet/{id?}','Tema\TemaController@kaydet')->name('admintema.kaydet');
//------------------------------------------------------------------

Route::get('/admin-iletisim-ayarlari','Tema\İletisimController@iletisimayar')->name('admin.iletisim.getir');
//------------------------------------------------------------------
Route::post('/admin-iletisim-ayarlari/kaydet/{id?}','Tema\İletisimController@kaydet')->name('admin.iletisim.kaydet');
//------------------------------------------------------------------

Route::get('/admin/şifredegistir','Admin\Ayar\AyarController@Showcph')->name('admin.sifre.getir');
Route::post('/admin/şifredegistirp','Admin\Ayar\AyarController@Showcph1')->name('admin.sifre.degistir');

Route::get('/admin/emaildegistir','Admin\Ayar\AyarController@mailsj')->name('admin.mail.getir');
Route::post('/admin/emaildegistirp','Admin\Ayar\AyarController@mailsjsj')->name('admin.mail.degistir');

Route::get('/subscriber','Admin\SubscriberController@index')->name('subscriber.index');
Route::delete('/subscriber/{subscriber}','Admin\SubscriberController@destroy')->name('admin.subscriber.destroy');



