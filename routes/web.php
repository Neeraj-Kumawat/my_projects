<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthCheck;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\fitnessControllers;
use App\Http\Controllers\web\webControllers;
use App\Http\Controllers\web\MembershipAddControllers;
use App\Http\Controllers\admin\featureControllers;
use App\Http\Controllers\admin\teamControllers;
use App\Http\Controllers\web\contactControllers;
use App\Http\Controllers\admin\shopControllers;
use App\Http\Controllers\admin\settingsControllers;
use App\Http\Controllers\admin\BlogControllers;
use App\Http\Controllers\admin\EmailContactControllers;
use App\Http\Controllers\admin\FaqsContactControllers;
use App\Http\Controllers\admin\GalleryContactControllers;
use App\Http\Controllers\admin\LoginContactControllers;
use App\Http\Controllers\admin\MembershipContactControllers;
use App\Http\Controllers\admin\ProfileContactControllers;
use App\Http\Controllers\admin\WorkingHoursContactControllers;
use App\Http\Controllers\admin\WorkingTimeContactControllers;
use App\Http\Controllers\admin\MembershipProducControllers;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\Api\ExampleController;


// Route::get('/', function () {
//     return view('welcome');

// });


Route::get('/', [webControllers::class, 'home_page'])->name('home');
Route::get('about-us',[webControllers::class, 'about_page']);
Route::get('blog',[webControllers::class, 'blog_page']);
Route::get('faqs',[webControllers::class, 'faqs_page']);
Route::get('contact-us',[webControllers::class, 'contact_page']);
Route::get('gallery',[webControllers::class, 'gallery_page']);
Route::get('blog-single', [webControllers::class, 'blog_single'])->name('admin.blog-single');
Route::post('admin/contact-form',[webControllers::class, 'contact_store'])->name('contact-form.contact_store');
Route::get('admin/contact/contact_delete/{id}',[webControllers::class, 'contact_delete']);

Route::get('shop',[shopControllers::class, 'shop_page']);
Route::get('shop-single',[shopControllers::class, 'shop_single_page']);
Route::get('shop-cart',[shopControllers::class, 'shop_cart_page']);
Route::get('shop-checkout',[shopControllers::class, 'shop_checkout_page']);

Route::get('pricing-plans', [MembershipContactControllers::class, 'membership_page'])->name('pricing-plans');





//
// Route::get('admin/day_hours/{id?}', [webControllers::class, 'day_hours'])->name('admin.day_hours');

Route::get('admin/add-hours', [WorkingHoursContactControllers::class, 'add_hours']);
Route::get('admin/hours-list', [WorkingHoursContactControllers::class, 'hours_list']);
Route::post('admin/hours-form', [WorkingHoursContactControllers::class, 'hours_store']);
Route::get('admin/hours/hours_edit/{id}', [WorkingHoursContactControllers::class, 'hours_edit']);
Route::post('admin/hours/update/{id}', [WorkingHoursContactControllers::class, 'hours_update']);
Route::get('admin/hours/hours_delete/{id}', [WorkingHoursContactControllers::class, 'hours_delete']);

Route::get('admin/add-time', [WorkingTimeContactControllers::class, 'add_time']);
Route::get('admin/time-list', [WorkingTimeContactControllers::class, 'time_list']);
Route::post('admin/time-form', [WorkingTimeContactControllers::class, 'time_store']);
Route::get('admin/time/time_edit/{id}', [WorkingTimeContactControllers::class, 'time_edit']);
Route::post('admin/time/update/{id}', [WorkingTimeContactControllers::class, 'time_update']);
Route::get('admin/hours/hours_delete/{id}', [WorkingHoursContactControllers::class, 'hours_delete']);
Route::get('admin/time/time_delete/{id}', [WorkingTimeContactControllers::class, 'time_delete']);

Route::get('login', [LoginContactControllers::class, 'login_page'])->name('login');
Route::get('register', [LoginContactControllers::class, 'register_page']);
Route::get('admin/register_edit/{id}', [LoginContactControllers::class, 'edit_register_page'])->name('admin.register_edit');
Route::post('admin/register_update/{id}', [LoginContactControllers::class, 'update_register_page'])->name('admin.register_update');
Route::post('admin/registered_page', [LoginContactControllers::class, 'registered_store']);
Route::post('admin/login', [LoginContactControllers::class, 'login_store'])->name('admin.login');
Route::get('logout',[LoginContactControllers::class, 'logout']);


Route::get('membership/export', [MembershipAddControllers::class, 'exportCSV'])->name('membership.export');
Route::get('web/membership_delete/{id}', [MembershipAddControllers::class, 'membership_delete']);
Route::post('web-logout',[MembershipAddControllers::class, 'membership_logout']);
Route::get('web-login', [LoginContactControllers::class, 'web_login_page'])->name('web.login');
Route::post('customer/login', [LoginContactControllers::class, 'customer_login_store'])->name('customer.login');
Route::get('web/register_edit/{id}', [LoginContactControllers::class, 'web_edit_register_page'])->name('web.register_edit');
Route::post('web/register_update/{id}', [LoginContactControllers::class, 'web_update_register_page'])->name('web.register_update');
Route::get('membership/success', [MembershipAddControllers::class, 'membership_success'])->name('membership.success');

Route::post('footer/contacts', [EmailContactControllers::class, 'store'])->name('emailContacts.store');

Route::middleware(['webLogin'])->group(function () {

    Route::get('admin/membership/add/{id}', [MembershipAddControllers::class, 'membership_add'])->name('membership.add');
    Route::get('admin/my-profile', [MembershipAddControllers::class, 'web_login_page'])->name('my-profile');




});


Route::get('user/update/{id}', [UserController::class, 'user_update'])->name('user.update');



Route::post('/change-password', [LoginContactControllers::class, 'changePassword'])->name('change.password.post');
Route::post('web/change-password', [LoginContactControllers::class, 'webchangePassword'])->name('web.change.password.post');


Route::middleware(['isAdmin'])->group(function () {
   
    Route::get('admin', [FitnessControllers::class, 'welcome'])->name('admin.welcome');
    Route::get('user', [UserController::class, 'user'])->name('admin.user');
  

    Route::get('admin/profile', [ProfileContactControllers::class, 'profile'])->name('admin.profile');

    Route::get('admin/add-blog', [BlogControllers::class, 'add_blog'])->name('admin.add-blog');
    Route::get('admin/blog-list', [BlogControllers::class, 'blog_list'])->name('admin.blog-list');
    Route::post('admin/blog-form', [BlogControllers::class, 'blog_store'])->name('blog.store');
    Route::get('admin/blog/blog_edit/{id}', [BlogControllers::class, 'blog_edit'])->name('blog.edit');
    Route::post('admin/blog/update/{id}', [BlogControllers::class, 'blog_update'])->name('blog.update');
    Route::get('admin/blog/blog_delete/{id}', [BlogControllers::class, 'blog_delete'])->name('blog.delete');

    Route::get('admin/add-feature', [featureControllers::class, 'add_feature'])->name('admin.add-feature');
    Route::get('admin/feature-list', [featureControllers::class, 'feature_list'])->name('admin.feature-list');
    Route::post('admin/feature-form',[featureControllers::class, 'feature_store'])->name('feature-form.feature_store');
    Route::get('admin/feature/feature_edit/{id}',[featureControllers::class, 'feature_edit'])->name('admin.feature-edit');
    Route::post('admin/feature/update/{id}',[featureControllers::class, 'feature_update'])->name('admin.feature-update');
    Route::get('admin/feature/feature_delete/{id}',[featureControllers::class, 'feature_delete'])->name('admin.feature-delete');

    Route::get('admin/add-team', [teamControllers::class, 'add_team'])->name('admin.add-team');
    Route::get('admin/team-list', [teamControllers::class, 'team_list'])->name('admin.team-list');
    Route::post('admin/team-form', [teamControllers::class, 'team_store'])->name('team-form.team_store');
    Route::get('admin/team/edit/{id}', [teamControllers::class, 'team_edit'])->name('admin.team-edit');
    Route::post('admin/team/update/{id}', [teamControllers::class, 'team_update'])->name('admin.team-update');
    Route::get('admin/team/delete/{id}', [teamControllers::class, 'team_delete'])->name('admin.team-delete');

    Route::get('admin/add-faqs', [FaqsContactControllers::class, 'add_faqs'])->name('admin.add_faqs');
    Route::get('admin/faqs-list', [FaqsContactControllers::class, 'faqs_list'])->name('admin.faqs_list');
    Route::post('admin/faqs-form', [FaqsContactControllers::class, 'faqs_store'])->name('admin.faqs_store');
    Route::get('admin/faqs/faqs_edit/{id}', [FaqsContactControllers::class, 'faqs_edit'])->name('admin.faqs_edit');
    Route::post('admin/faqs/update/{id}', [FaqsContactControllers::class, 'faqs_update'])->name('admin.faqs_update');
    Route::get('admin/faqs/faqs_delete/{id}', [FaqsContactControllers::class, 'faqs_delete'])->name('admin.faqs_delete');

 
    Route::get('subscribe_list', [EmailContactControllers::class, 'subscribe'])->name('admin.subscribe.list');
    Route::get('admin/subscribe/subscribe_delete/{id}', [EmailContactControllers::class, 'subscribe_delete'])->name('admin.subscribe.delete');
    

    Route::get('admin/add-gallery', [GalleryContactControllers::class, 'add_gallery'])->name('admin.gallery.add');
    Route::get('admin/gallery-list', [GalleryContactControllers::class, 'gallery_list'])->name('admin.gallery.index');
    Route::post('admin/gallery-form', [GalleryContactControllers::class, 'gallery_store'])->name('admin.gallery.store');
    Route::get('admin/gallery/edit/{id}', [GalleryContactControllers::class, 'gallery_edit'])->name('admin.gallery.edit');
    Route::post('admin/gallery/update/{id}', [GalleryContactControllers::class, 'gallery_update'])->name('admin.gallery.update');
    Route::get('admin/gallery/gallery_delete/{id}', [GalleryContactControllers::class, 'gallery_delete'])->name('admin.gallery.delete');


    Route::get('admin/add-membership', [MembershipContactControllers::class, 'add_membership'])->name('admin.add-membership');
    Route::get('admin/membership-list', [MembershipContactControllers::class, 'membership_list'])->name('admin.membership-list');
    Route::post('admin/membership-form', [MembershipContactControllers::class, 'membership_store'])->name('admin.membership-form');
    Route::get('admin/membership/membership_edit/{id}', [MembershipContactControllers::class, 'membership_edit'])->name('admin.membership-edit');
    Route::post('admin/membership/update/{id}', [MembershipContactControllers::class, 'membership_update'])->name('admin.membership-update');
    Route::get('admin/membership/membership_delete/{id}', [MembershipContactControllers::class, 'membership_delete'])->name('admin.membership.delete');

    
   

    Route::get('admin/add-product', [MembershipProducControllers::class, 'add_produc'])->name('admin.add-product');
    Route::get('admin/product-list', [MembershipProducControllers::class, 'produc_list'])->name('admin.product-list');
    Route::post('admin/product-form', [MembershipProducControllers::class, 'produc_store'])->name('admin.product-form');
    Route::get('admin/product/product_edit/{id}', [MembershipProducControllers::class, 'produc_edit'])->name('admin.product-edit');
    Route::post('admin/product/update/{id}', [MembershipProducControllers::class, 'produc_update'])->name('admin.product-update');
    Route::get('admin/product/product_delete/{id}', [MembershipProducControllers::class, 'produc_delete'])->name('admin.product-delete');
     
   
    Route::get('admin/contact-list', [ContactControllers::class, 'contact_list'])->name('admin.contact-list');
    Route::get('contact/{id}/update', [ContactControllers::class, 'contact_update'])->name('contact.update');

    Route::get('admin/settings', [SettingsControllers::class, 'settings'])->name('admin.settings');
    Route::post('update-settings', [SettingsControllers::class, 'updateSettings'])->name('settings.update');
    
    
    Route::get('membership/purchase', [MembershipAddControllers::class, 'membership_purchase'])->name('membership.purchase');
    // Route::get('posts', [ExampleController::class, 'posts'])->name('posts');
    // Route::post('/example', [ExampleController::class, 'storemyapi']);

  
    

    });
