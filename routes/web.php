<?php


Route::get('/', [
   'uses' => 'HomepageController@home',
    'as' => '/'
]);
Route::get('1/{category}/{id}/{title}', [
   'uses' => 'ContentController@index',
    'as' => 'content'
]);


Route::get('carousel-pic/{id}', [
   'uses' =>'CarouselController@carousel_content',
    'as'=>'carousel-content'
]);
Route::get('category/create', [
   'uses' =>'CategoryController@create_category',
    'as'=>'create-category'
]);
Route::post('category/save', [
   'uses' =>'CategoryController@category_save',
    'as'=>'category-save'
]);
Route::get('category/unpublished/{id}', [
   'uses' =>'CategoryController@category_unpublished',
    'as'=>'unpublished-category'
]);
Route::get('category/published/{id}', [
   'uses' =>'CategoryController@category_published',
    'as'=>'published-category'
]);
Route::get('category/edit/{id}', [
   'uses' =>'CategoryController@category_edit',
    'as'=>'edit-category'
]);
Route::post('category/update', [
   'uses' =>'CategoryController@category_update',
    'as'=>'category-update'
]);
Route::get('category/delete{id}', [
   'uses' =>'CategoryController@category_delete',
    'as'=>'delete-category'
]);




Route::get('category/manage', [
   'uses' =>'CategoryController@manage_category',
    'as'=>'manage-category'
]);
Route::get('blog/create', [
   'uses' =>'BlogController@create_blog',
    'as'=>'create-blog'
]);
Route::post('blog/save', [
   'uses' =>'BlogController@blog_save',
    'as'=>'blog-save'
]);
Route::get('blog/unpublished/{id}', [
   'uses' =>'BlogController@blog_unpublished',
    'as'=>'unpublished-blog'
]);

Route::get('blog/published/{id}', [
   'uses' =>'BlogController@blog_published',
    'as'=>'published-blog'
]);
Route::get('blog/edit/{id}', [
   'uses' =>'BlogController@blog_edit',
    'as'=>'blog-edit'
]);
Route::post('blog/update', [
   'uses' =>'BlogController@blog_update',
    'as'=>'blog-update'
]);
Route::get('blog/delete/{id}', [
   'uses' =>'BlogController@blog_delete',
    'as'=>'blog-delete'
]);
Route::post('header/save', [
    'uses' => 'HeaderController@save_header',
    'as' => 'header-save'
]);

Route::get('header/create', [
    'uses' => 'HeaderController@create_header',
    'as' => 'create-header'
]);
Route::get('header/manage', [
    'uses' => 'HeaderController@manage_header',
    'as' => 'manage-header'
]);
Route::get('header/unpublished/{id}', [
    'uses' => 'HeaderController@unpublished_header',
    'as' => 'unpublished-header'
]);
Route::get('header/published/{id}', [
    'uses' => 'HeaderController@published_header',
    'as' => 'published-header'
]);
Route::get('header/edit/{id}', [
    'uses' => 'HeaderController@edit_header',
    'as' => 'header-edit'
]);
Route::post('header/update', [
    'uses' => 'HeaderController@update_header',
    'as' => 'header-update'
]);
Route::get('header/delete/{id}', [
    'uses' => 'HeaderController@delete_header',
    'as' => 'header-delete'
]);






Route::get('blog/manage', [
   'uses' =>'BlogController@manage_blog',
    'as'=>'manage-blog'
]);

Route::get('carousel/create', [
   'uses' =>'CarouselController@carousel_create',
    'as'=>'create-carousel'
]);
Route::post('carousel/save', [
   'uses' =>'CarouselController@carousel_save',
    'as'=>'carousel-save'
]);
Route::get('carousel/manage', [
   'uses' =>'CarouselController@carousel_manage',
    'as'=>'manage-carousel'
]);
Route::get('carousel/unpublished/{id}', [
   'uses' =>'CarouselController@carousel_unpublished',
    'as'=>'unpublished-carousel'
]);
Route::get('carousel/published/{id}', [
   'uses' =>'CarouselController@carousel_published',
    'as'=>'published-carousel'
]);
Route::get('carousel/edit/{id}', [
    'uses' =>'CarouselController@carousel_edit',
    'as'=>'carousel-edit'
]);
Route::post('carousel/update', [
    'uses' =>'CarouselController@carousel_update',
    'as'=>'carousel-update'
]);
Route::get('carousel/delete/{id}', [
    'uses' =>'CarouselController@carousel_delete',
    'as'=>'carousel-delete'
]);
Route::get('tutorial/create', [
    'uses' =>'TutorialController@tutorial_create',
    'as'=>'create-tutorial'
]);
Route::post('tutorial/save', [
    'uses' =>'TutorialController@tutorial_save',
    'as'=>'tutorial-save'
]);
Route::get('tutorial/manage', [
    'uses' =>'TutorialController@tutorial_manage',
    'as'=>'manage-tutorial'
]);
Route::get('tutorial/unpublished/{id}', [
    'uses' =>'TutorialController@tutorial_unpublished',
    'as'=>'unpublished-tutorial'
]);
Route::get('tutorial/published/{id}', [
    'uses' =>'TutorialController@tutorial_published',
    'as'=>'published-tutorial'
]);
Route::get('tutorial/edit/{id}', [
    'uses' =>'TutorialController@tutorial_edit',
    'as'=>'tutorial-edit'
]);
Route::post('tutorial/update', [
    'uses' =>'TutorialController@tutorial_update',
    'as'=>'tutorial-update'
]);
Route::get('tutorial/delete/{id}', [
    'uses' =>'TutorialController@tutorial_delete',
    'as'=>'tutorial-delete'
]);
Route::get('tutorial', [
    'uses' =>'TutorialController@tutorial_content',
    'as'=>'tutorial-content'
]);
Route::get('tutorial/{id}', [
    'uses' =>'TutorialController@tutorial_description',
    'as'=>'tutorial-description'
]);

Route::get('Category/{category}/{id}', [
    'uses' =>'CategoryContentController@category_content',
    'as'=>'category_content'
]);
Route::get('contact-us', [
    'uses' =>'ContactController@contact_us',
    'as'=>'contact-us'
]);
Route::post('contact', [
    'uses' =>'ContactController@public_contact',
    'as'=>'public-contact'
]);

Route::get('gkCategory/create', [
    'uses' =>'GkController@gk_category_create',
    'as'=>'gk-category-create'
]);
Route::post('gkCategory/save', [
    'uses' =>'GkController@gk_category_save',
    'as'=>'gk-category-save'
]);
Route::get('gkCategory/manage', [
    'uses' =>'GkController@gk_category_manage',
    'as'=>'gk-category-manage'
]);
Route::get('gkCategory/unpublished/{id}', [
    'uses' =>'GkController@gk_category_unpublished',
    'as'=>'unpublished-gk-category'
]);
Route::get('gkCategory/published/{id}', [
    'uses' =>'GkController@gk_category_published',
    'as'=>'published-gk-category'
]);
Route::get('gkCategory/edit/{id}', [
    'uses' =>'GkController@gk_category_edit',
    'as'=>'edit-gk-category'
]);
Route::post('gkCategory/update', [
    'uses' =>'GkController@gk_category_update',
    'as'=>'gk-category-update'
]);
Route::get('gkCategory/delete/{id}', [
    'uses' =>'GkController@gk_category_delete',
    'as'=>'delete-gk-category'
]);

//Route::get('photography/create', [
//    'uses' =>'Photography@create_photography',
//    'as'=>'create-photography'
//]);







Route::get('gk/create', [
    'uses' =>'GkController@gk_create',
    'as'=>'create-gk'
]);
Route::post('gk/save', [
    'uses' =>'GkController@gk_save',
    'as'=>'gk-save'
]);
Route::get('gk/manage', [
    'uses' =>'GkController@gk_manage',
   'as'=>'manage-gk'
]);
Route::get('gk/unpublished/{id}', [
    'uses' =>'GkController@gk_unpublished',
    'as'=>'unpublished-gk'
]);
Route::get('gk/published/{id}', [
    'uses' =>'GkController@gk_published',
    'as'=>'published-gk'
]);
Route::get('gk/edit/{id}', [
    'uses' =>'GkController@gk_edit',
    'as'=>'gk-edit'
]);
Route::post('gk/update', [
    'uses' =>'GkController@gk_update',
    'as'=>'gk-update'
]);
Route::get('gk/delete/{id}', [
    'uses' =>'GkController@gk_delete',
    'as'=>'gk-delete'
]);
Route::get('gk/{id}/{title}', [
    'uses' =>'GkController@gk_content',
    'as'=>'gk-content'
]);
Route::post('comments/{id}', [
    'uses' =>'commentsController@store',
    'as'=>'comments.store'
]);























Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
