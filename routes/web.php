<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/services', [App\Http\Controllers\ServicesController::class, 'index'])->name('services');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/message', [App\Http\Controllers\ContactController::class, 'store'])->name('message');

// ============ CMS ===============
Route::group(array('prefix' => 'admincp'),
    function() {
Route::get('/', 'HomeController@index');
Route::get('/cmslogout', 'AdminLogOutCMs@index');
                  // swithc lang
                  Route::get('/switchlang/{lang}', function ($lang=NULL) {
                      session(['cmslangcode' => $lang]);
                     return back();
                     // return view('text');
                  });



               Route::get('/login', function () {
                  return view('auth.login');
              });




              Route::namespace('CMS')->group(function () {

               // sliders
               Route::get('/newslide', 'Sliders@addnewliers');
               Route::post('/saveslied', 'Sliders@savesliers');
               Route::get('/allsliders', 'Sliders@allsliers');
               Route::get('/slidestuts/{slide_id}/{stuts}', 'Sliders@changestuts');
               Route::get('/editslier/{slide_id}', 'Sliders@editslier');
               Route::post('/updateslied/{slide_id}', 'Sliders@updateslier');
               Route::get('/deleteslier/{slide_id}', 'Sliders@deleteslier');
               // blog sections
               Route::get('/newblogsection', 'BlogCMS@newsection');
               Route::post('/savesblogsection', 'BlogCMS@savesection');
               Route::get('/allblogsection', 'BlogCMS@allsections');
               Route::get('/blogsectionstuts/{id}/{stuts}', 'BlogCMS@changesectionstuts');
               Route::get('/editblogsection/{id}', 'BlogCMS@editsection');
               Route::post('/updateblogsection/{id}', 'BlogCMS@updatesection');
               Route::get('/deleteblogsection/{id}', 'BlogCMS@deletesection');
               // blog posts
               Route::get('/newpost', 'BlogCMS@newpost');
               Route::post('/savespost', 'BlogCMS@savePost');
               Route::get('/allposts', 'BlogCMS@allPost');
               Route::get('/poststuts/{id}/{stuts}', 'BlogCMS@changePoststuts');
               Route::get('/editpost/{id}', 'BlogCMS@editPost');
               Route::post('/updatepost/{id}', 'BlogCMS@updatePost');
               Route::get('/deletepost/{id}', 'BlogCMS@deletePost');
               // pages
               Route::get('/addpage', 'PagesCMS@newPage');
               Route::post('/savepage', 'PagesCMS@savePage');
               Route::get('/allpages', 'PagesCMS@allPages');
               Route::get('/pagestuts/{id}/{stuts}', 'PagesCMS@changePagetuts');
               Route::get('/editpage/{id}', 'PagesCMS@editPage');
               Route::post('/updatepage/{id}', 'PagesCMS@updatePage');
               Route::get('/deletepage/{id}', 'PagesCMS@deletePage');
               // services
               Route::get('/addservice', 'ServicesCMS@newService');
               Route::post('/saveservice', 'ServicesCMS@saveService');
               Route::get('/allservice', 'ServicesCMS@allServices');
               Route::get('/servicetuts/{id}/{stuts}', 'ServicesCMS@changeServicestuts');
               Route::get('/editservice/{id}', 'ServicesCMS@editService');
               Route::post('/updateservice/{id}', 'ServicesCMS@updateService');
               Route::get('/deleteservice/{id}', 'ServicesCMS@deleteService');
               // GallerySections
               Route::get('/addgallerysection', 'GalleryCMS@newSection');
               Route::post('/savegallerysection', 'GalleryCMS@saveSection');
               Route::get('/allgallerysections', 'GalleryCMS@allSections');
               Route::get('/gallerysectionstuts/{id}/{stuts}', 'GalleryCMS@changeSectiontuts');
               Route::get('/editgallerysection/{id}', 'GalleryCMS@editSection');
               Route::post('/updategallerysection/{id}', 'GalleryCMS@updateSection');
               Route::get('/deletegallerysection/{id}', 'GalleryCMS@deleteSection');
               // photo Gallery
               Route::get('/addphotogallery', 'GalleryCMS@newPhotos');
               Route::post('/savephotogallery', 'GalleryCMS@savePhotos');
               Route::get('/allphotogallery', 'GalleryCMS@allPhotos');
               Route::get('/getsectionphotos/{id}', 'GalleryCMS@allSectionPhotos');
               Route::get('/deletephotogallery/{id}', 'GalleryCMS@deleteSinglePhoto');
               // video Gallery
               Route::get('/addvideogallery', 'GalleryCMS@newVideo');
               Route::post('/savevideogallery', 'GalleryCMS@saveVideo');
               Route::get('/allvideogallery', 'GalleryCMS@allVideos');
               Route::get('/videogallerystuts/{id}/{stuts}', 'GalleryCMS@changeVideostuts');
               Route::get('/editvideogallery/{id}', 'GalleryCMS@editVideo');
               Route::post('/updatevideogallery/{id}', 'GalleryCMS@updateVideo');
               Route::get('/deletevideogallery/{id}', 'GalleryCMS@deleteVideo');
               // menue locations  MenuLocationsCMS
               Route::get('/addmenulocation', 'MenuLocationsCMS@newsection');
               Route::post('/savemenulocation', 'MenuLocationsCMS@savesection');
               Route::get('/allmenulocations', 'MenuLocationsCMS@allsections');
               Route::get('/menulocationstuts/{id}/{stuts}', 'MenuLocationsCMS@changesectionstuts');
               Route::get('/editmenulocation/{id}', 'MenuLocationsCMS@editsection');
               Route::post('/updatemenulocation/{id}', 'MenuLocationsCMS@updatesection');
               Route::get('/deletmenulocation/{id}', 'MenuLocationsCMS@deletesection');
               // menues CMS
               Route::get('/addmenu', 'MenuLocationsCMS@newmenu');
               Route::post('/savemenulocation', 'MenuLocationsCMS@savesemenu');
               Route::get('/allmenus', 'MenuLocationsCMS@allmenus');
               Route::get('/menustuts/{id}/{stuts}', 'MenuLocationsCMS@changemenustuts');
               Route::get('/editmenu/{id}', 'MenuLocationsCMS@editmenu');
               Route::post('/updatemenu/{id}', 'MenuLocationsCMS@updatemenu');
               Route::get('/deletmenu/{id}', 'MenuLocationsCMS@deletemenu');
               // contact us emails
               Route::get('/emailmessages/', 'EmailContactCMS@allMails');
               Route::get('/readmessages/{id}', 'EmailContactCMS@readMail');
               Route::get('/messagesstuts/{id}/{stuts}', 'EmailContactCMS@changeMailstuts');
               Route::get('/messageaction/{id}/{stuts}', 'EmailContactCMS@changeMailAction');
               Route::get('/deletemailmessages/{id}', 'EmailContactCMS@deleteMail');


               // users
               Route::get('/adduser', 'UsersCMS@newUser');
               Route::post('/saveuser', 'UsersCMS@saveUser');
               Route::get('/allusers', 'UsersCMS@allUsers');
               Route::get('/editusers/{id}', 'UsersCMS@editUser');
               Route::post('/updateusers/{id}', 'UsersCMS@updateUser');
               Route::get('/deleteusers/{id}', 'UsersCMS@deleteUser');









              // Site global config from here
              Route::get('/smtpconfig', 'GeneralSettings@SmtpConfig');
              Route::get('/websiteinfo', 'GeneralSettings@Siteinfo');
              Route::get('/weblogos', 'GeneralSettings@SiteLogos');
              Route::get('/soicalmediaa', 'GeneralSettings@Soical');
              // update keys
              Route::post('/updateconfig', 'GeneralSettings@UpdateConfigkeys');
              // update logos
              Route::post('/updateconfiglogos', 'GeneralSettings@UpdateLogos');

















               // admin setting from here
               // admin Languages setting  && translations
               // Languages only
               Route::get('/newadminlang', 'AdminLanguages@create');
               Route::post('/saveadminlang', 'AdminLanguages@store');
               Route::get('/adminlanguages', 'AdminLanguages@show');
               Route::get('/adminlangstuts/{item_id}/{stuts}', 'AdminLanguages@stuts');
               Route::get('/editadminlanguage/{item_id}', 'AdminLanguages@edit');
               Route::post('/updateadminlang/{item_id}', 'AdminLanguages@update');
               Route::get('/deleteadminlang/{item_id}', 'AdminLanguages@destroy');
               Route::get('/setadminmainlang/{item_id}', 'AdminLanguages@SetMainLanguage');
               // admin text translation
               Route::get('/translationadminlanguage/{lang_code}', 'AdminLanguages@Translation');
               Route::post('/updatetranslations/{lang_code}', 'AdminLanguages@UpdateTranslation');
               // add new key for all  languages
               Route::get('/addlangkey/{lang_code}', 'AdminLanguages@AddLangKey');
               Route::post('/addlangkeyvalue', 'AdminLanguages@SaveLangKey');










              /* // tours categories
               Route::get('/newtourcategory', 'ToursCMS@newCategory');
               Route::post('/savetourcategory', 'ToursCMS@saveCategory');
               Route::get('/alltourscategories', 'ToursCMS@allCategory');
               Route::get('/tourcategorystuts/{id}/{stuts}', 'ToursCMS@changeCategorystuts');
               Route::get('/edittourcategory/{id}', 'ToursCMS@editCategory');
               Route::post('/updatetourcategory/{id}', 'ToursCMS@updateCategory');
               Route::get('/deletetourcategory/{id}', 'ToursCMS@deleteCategory');
               // tour items
               Route::get('/newtour', 'ToursCMS@newTour');
               Route::post('/savetour', 'ToursCMS@saveTour');
               Route::get('/alltours', 'ToursCMS@allTours');
               Route::get('/tourstuts/{id}/{stuts}', 'ToursCMS@changeTourstuts');
               Route::get('/edittour/{id}', 'ToursCMS@editTour');
               Route::post('/updatetour/{id}', 'ToursCMS@updateTour');
               Route::get('/deletetour/{id}', 'ToursCMS@deleteTour');   */


              });

            }); // end admin routes




/*

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/{fdh}', function ($lang=NULL) {


Route::post('/ajj', function () {
     echo  $_POST['user'];
});

Route::group(['domain' => '{subdomain}.raiotcms'], function()
{
    Route::any('/', function($subdomain)
    {
        return 'Subdomain ' . $subdomain;
    });
});

Route::get('/sdg', function () {
    //return view('admin.home');
    return view('text');
});
 Route::get('/', 'Sliders@addnewliers');


    echo '<a href="en"> Englidh </a> <br>';
    echo '<a href="ar"> arabic </a> <br>';


    // Store a piece of data in the session...
    session(['cmslangcode' => $lang]);

    $live_lang =  session('cmslangcode');

    echo ' SESSION LANG '.$live_lang.'<br>';


    /*$dir ='cmsdir.'.config('cms.cms_lang');
   // echo config('bahaa.edit').'<br>';
   // echo config($dir).'<br>';
  //  echo config('bahaa.addnew');

      $dd = new App\Helpers\Cmstranslate;
      echo $dd->cmslang('edit').'<br>';
      echo $dd->cmslang('addnew').'<br>';


      $dir ='cmsdir.'.$lang;
      echo config($dir);
});
*/





/*

Route::get('/{code}', function ($code) {

    // $xx = App\CMSLag::where('code','yes')->first();

      //echo $xx->code;

      $cmslang = App\CMSTranslation::where('lang_code',$code)
      ->where('langkey','addnew')->first();
      echo $cmslang->text;

});*/


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');