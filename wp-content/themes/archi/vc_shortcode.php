<?php 


//Custom Heading
if(function_exists('vc_map')){

   vc_map( array(

   "name"      => __("OT Heading", 'archi'),

   "base"      => "heading",

   "class"     => "",

   "icon" => "icon-st",

   "category"  => 'Content',

   "params"    => array(

      array(

         "type"      => "textarea",

         "holder"    => "div",

         "class"     => "",

         "heading"   => __("Text", 'archi'),

         "param_name"=> "text",

         "value"     => "",

         "description" => __("Add Text", 'archi')

      ),
      array(

        "type" => "dropdown",

        "heading" => __('Element Tag', 'archi'),

        "param_name" => "tag",

        "value" => array(
                     __('Select Tag', 'archi') => '',

                     __('h1', 'archi') => 'h1',

                     __('h2', 'archi') => 'h2',

                     __('h3', 'archi') => 'h3',  

                     __('h4', 'archi') => 'h4',

                     __('h5', 'archi') => 'h5',

                     __('h6', 'archi') => 'h6',  

                     __('p', 'archi')  => 'p',

                     __('div', 'archi') => 'div',
                    ),

        "description" => __("Section Element Tag", 'archi'),      

      ),
      array(

        "type" => "dropdown",

        "heading" => __('Text Align', 'archi'),

        "param_name" => "align",

        "value" => array( 

                     __('Select Align', 'archi') => '',  

                     __('left', 'archi') => 'left',

                     __('right', 'archi') => 'right',  

                     __('center', 'archi') => 'center',

                     __('justify', 'archi') => 'justify',
                     
                    ),

        "description" => __("Section Overlay", 'archi'),      

      ),
      array(

         "type"      => "textfield",

         "holder"    => "div",

         "class"     => "",

         "heading"   => __("Font Size", 'archi'),

         "param_name"=> "size",

         "value"     => "",

         "description" => __("Font Size", 'archi')

      ),
      array(

         "type"      => "colorpicker",

         "holder"    => "div",

         "class"     => "",

         "heading"   => __("Color", 'archi'),

         "param_name"=> "color",

         "value"     => "",

         "description" => __("Color", 'archi')

      ),
      
      array(

         "type"      => "textfield",

         "holder"    => "div",

         "class"     => "",

         "heading"   => __("Class Extra", 'archi'),

         "param_name"=> "class",

         "value"     => "",

         "description" => __("Class extra for style", 'archi')

      ),
    )));

}

// Line Solid
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Line Solid", 'archi'),
   "base"      => "line_solid",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Content',
   "params"    => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Icon",
         "param_name" => "icon",
         "value" => "",
         "description" => __("EX: circle.Find here: <a target='_blank' href='http://fontawesome.io/icons/'>http://fontawesome.io/icons/</a>", 'archi')
      ),
      
    )));
}


// Buttons
if(function_exists('vc_map')){
   vc_map( array(

   "name" => __("OT Button", 'archi'),

   "base" => "button",

   "class" => "",

   "category" => 'Content',

   "icon" => "icon-st",

   "params" => array(

      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Button Text", 'archi'),

         "param_name" => "btntext",

         "value" => "",

         "description" => __("Button Text", 'archi')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Button Link", 'archi'),

         "param_name" => "btnlink",

         "value" => '',

         "description" => __("Button Link", 'archi')

      ),
           
      
    )));

}


// Home Video
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Home Video", 'archi'),
   "base"      => "home_video",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Content',
   "params"    => array(  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Nunber Slide Show",
         "param_name" => "number",
         "value" => "3",
         "description" => __("Nunber Slide Show", 'archi')
      ),
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Background Video",
         "param_name" => "bgvideo",
         "value" => "",
         "description" => __("Background Video", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Video Link",
         "param_name" => "video1",
         "value" => "",
         "description" => __("Video Link mp4", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Video Link",
         "param_name" => "video2",
         "value" => "",
         "description" => __("Video Link webm", 'archi')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Text SubTitle",
         "param_name" => "stitle",
         "value" => "",
         "description" => __("Text SubTitle", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Link Button",
         "param_name" => "btnlink",
         "value" => "",
         "description" => __("Link Button", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Text Button",
         "param_name" => "btntext",
         "value" => "",
         "description" => __("Text Button", 'archi')
      ),
             
          
    )));
}

// Home Parallax
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Home Parallax", 'archi'),
   "base"      => "home_parallax",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Content',
   "params"    => array(  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Nunber Slide Show",
         "param_name" => "number",
         "value" => 3,
         "description" => __("Number", 'archi')
      ),       
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Text SubTitle",
         "param_name" => "stitle",
         "value" => "",
         "description" => __("Text", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Link Button",
         "param_name" => "btnlink",
         "value" => "",
         "description" => __("Link", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Text Button",
         "param_name" => "btntext",
         "value" => "",
         "description" => __("Text", 'archi')
      ),                       
    )));
}

// Home Parallax image Landing
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Home Image Landing", 'archi'),
   "base"      => "home_landing",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Content',
   "params"    => array(  
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => "logo",
         "param_name" => "logo",
         "value" => "",
         "description" => __("Upload your logo.", 'demeter')
      ),  
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
         "description" => __("Add your title", 'archi')
      ),       
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => "SubTitle",
         "param_name" => "stitle",
         "value" => "",
         "description" => __("Add your subtitle", 'archi')
      ),
      array(
        'type' => 'vc_link',
         "heading" => __("Link Button", 'archi'),
         "param_name" => "linkbox",         
         "description" => __("Add your link to button.", 'archi')
      ),   
    )));
}

// Home Video Landing
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Home Video Landing", 'archi'),
   "base"      => "video_landing",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Content',
   "params"    => array(  
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => "logo",
         "param_name" => "logo",
         "value" => "",
         "description" => __("Upload your logo.", 'demeter')
      ),        
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
         "description" => __("Add your title", 'archi')
      ),       
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => "SubTitle",
         "param_name" => "stitle",
         "value" => "",
         "description" => __("Add your subtitle", 'archi')
      ),
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Background Video",
         "param_name" => "bgvideo",
         "value" => "",
         "description" => __("Background Video", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "MP4 Video Link",
         "param_name" => "mp4",
         "value" => "",
         "description" => __("Video Link mp4", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "WEBM Video Link",
         "param_name" => "webm",
         "value" => "",
         "description" => __("Video Link webm", 'archi')
      ), 
      array(
        'type' => 'vc_link',
         "heading" => __("Link Button", 'archi'),
         "param_name" => "linkbox",         
         "description" => __("Add your link to button.", 'archi')
      ),   
    )));
}

// Info Apps Landing
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Info Apps", 'archi'),
   "base"      => "info_apps",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Content',
   "params"    => array( 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Add icon class", 'archi'),
         "param_name" => "icon",
         "value" => "",
         "description" => __("Ex: icon-<code>wallet</code>, <a href='http://vegatheme.com/html/archi-icons-etlinefont/' target='_blank'>view more icon class</a>", 'archi')
      ),    
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'archi'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'archi')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'archi'),
         "param_name" => "desc",
         "value" => "",
         "description" => __("Content right.", 'archi')
      ),
      array(
         'type' => 'css_editor',
         'heading' => __( 'CSS box', 'archi' ),
         'param_name' => 'css',
         // 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'archi' ),
         'group' => __( 'Design Options', 'archi' )
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Icon Position",
         "param_name" => "style",
         "value" => array(                     
                     __('Icon right', 'archi') => 'right',
                     __('Icon left', 'archi') => 'left',                       
                     __('Icon center', 'archi') => 'center',                   
                    ),
         "description" => __("Select Icon Position", 'archi')
      ), 
    )));
}

// Quick View - Landing Page
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Quick Office 2", 'archi'),
   "base"      => "quickview2",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Content',
   "params"    => array(
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Photo",
         "param_name" => "photo",
         "value" => "",
         "description" => __("Photo", 'archi')
      ),       
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'archi'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'archi')
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'archi'),
         "param_name" => "content",
         "value" => "",
         "description" => __("Content right.", 'archi')
      ),
    )));
}

// Video Tour - Landing Page
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Video Tour", 'archi'),
   "base" => "video_tour",
   "class" => "",
   "category" => 'Content',
   "icon" => "icon-st",
   "params" => array(    
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Photo",
         "param_name" => "photo",
         "value" => "",
         "description" => __("Photo", 'archi')
      ),         
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Video Url", 'archi'),
         "param_name" => "video_url",
         "value" => "",
         "description" => __("Add youtube video link url, Ex: https://www.youtube.com/watch?v=efVWyPNd3xw", 'archi')
      ),      
    )));
}

// Portfolio Gallery - Landing Page
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Portfolio Gallery", 'archi'),
   "base"      => "folio_gallery",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Content',
   "params"    => array(
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Text Show All Portfolio", 'archi'),
         "param_name"=> "all",
         "value"     => "",
         "description" => __("Text Filter Show All Portfolio.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number portfolio per page", 'archi' ),
         "param_name" => "num",
         "value" => 8,
         "description" => __("Enter Number Portfolio.", 'archi' )
      ), 
      
    )));
}

// Buttons Download - Landing Page
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Download Button", 'archi'),
   "base" => "download_btn",
   "class" => "",
   "category" => 'Content',
   "icon" => "icon-st",
   "params" => array(
      array(
         'type' => 'iconpicker',
         'heading' => __( 'Icon', 'archi' ),
         'param_name' => 'icon_fontawesome',
         'value' => 'fa fa-info-circle',
         'settings' => array(
            'emptyIcon' => false, // default true, display an "EMPTY" icon?
            'iconsPerPage' => 4000, // default 100, how many icons per/page to display
         ),         
         'description' => __( 'Select icon from library.', 'archi' ),
      ),    
      array(
        'type' => 'vc_link',
         "heading" => __("Link Banner Box", 'archi'),
         "param_name" => "linkbox",         
         "description" => __("Add link to banner.", 'archi')
      ), 
      array(
         'type' => 'css_editor',
         'heading' => __( 'CSS box', 'archi' ),
         'param_name' => 'css',
         // 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'archi' ),
         'group' => __( 'Design Options', 'archi' )
      ), 
    )));
}

// Why Choose Us - Landing Page
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Why Choose Us", 'archi'),
   "base" => "reasons",
   "class" => "",
   "category" => 'Content',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'archi'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'archi')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'archi'),
         "param_name" => "desc",
         "value" => "",
         "description" => __("Content right.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Type Icon",
         "param_name" => "reasons_type",
         "value" => array(
                     __('Use number type', 'archi') => 'number_type',
                     __('Use font icon', 'archi') => 'icon_type',                     
                    ),
         "description" => __("Select type icon", 'archi')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number", 'archi'),
         "param_name" => "number",
         "value" => "",
         "description" => __("Add number", 'archi'),
         'dependency' => array(
            'element' => 'reasons_type',
            'value' => 'number_type',
         ),
      ),
      array(
         'type' => 'iconpicker',
         'heading' => __( 'Icon', 'archi' ),
         'param_name' => 'icon_fontawesome',
         'value' => 'fa fa-info-circle',
         'settings' => array(
            'emptyIcon' => false, // default true, display an "EMPTY" icon?
            'iconsPerPage' => 4000, // default 100, how many icons per/page to display
         ),         
         'description' => __( 'Select icon from library.', 'archi' ),
         'dependency' => array(
            'element' => 'reasons_type',
            'value' => 'icon_type',
         ),
      ),    
      array(
        'type' => 'vc_link',
         "heading" => __("Link Banner Box", 'archi'),
         "param_name" => "linkbox",         
         "description" => __("Add link to banner.", 'archi')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Delay Animate", 'archi'),
         "param_name" => "delay",
         "value" => "",
         "description" => __("Add number delay animate, Ex: .5 or 1", 'archi')
      ),
      array(
         'type' => 'css_editor',
         'heading' => __( 'CSS box', 'archi' ),
         'param_name' => 'css',
         // 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'archi' ),
         'group' => __( 'Design Options', 'archi' )
      ), 
    )));
}

//Video Player
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Video Post", 'archi'),
   "base"      => "videoplayer",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Content',
   "params"    => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Link Video",
         "param_name" => "video",
         "value" => "",
         "description" => __("Ex: http://player.vimeo.com/video/88883554 or http://www.youtube.com/embed/eP2VWNtU5rw", 'archi')
      ),       
    )));
}

// Quick View (use)
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Quick Office", 'archi'),
   "base"      => "quickview",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Content',
   "params"    => array(
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Photo",
         "param_name" => "photo",
         "value" => "",
         "description" => __("Photo", 'archi')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Height Photo", 'archi'),
         "param_name" => "height",
         "value" => "",
         "description" => __("Ex:480px, 500px...", 'archi')
      ),    
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'archi'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'archi')
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'archi'),
         "param_name" => "content",
         "value" => "",
         "description" => __("Content right.", 'archi')
      ),
    )));
}

// Our Facts (use)
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Our Facts", 'archi'),
   "base" => "ourfacts",
   "class" => "",
   "category" => 'Content',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Fun Fact Icon",
         "param_name" => "icon",
         "value" => "",
         "description" => __("Find <a target='_blank' href='http://vegatheme.com/html/etlinefont-icons/'>Here</a>", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title Fact", 'archi'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title display in Our Facts box.", 'archi')
      ),
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number Fact", 'archi'),
         "param_name" => "number",
         "value" => "",
         "description" => __("Number display in Our Facts box.", 'archi')
      ),
      
    )));
}



//Portfolio Filter
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Portfolio Filter", 'archi'),
   "base"      => "foliof",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Content',
   "params"    => array(

      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Text Show All Portfolio", 'archi'),
         "param_name"=> "all",
         "value"     => "",
         "description" => __("Text Filter Show All Portfolio.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number portfolio per page", 'archi' ),
         "param_name" => "num",
         "value" => "10",
         "description" => __("Enter Number Portfolio.", 'archi' )
      ), 
      
    )));
}

//Clients Logo 

if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Clients Logo", 'archi'),
   "base"      => "logos",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Content',
   "params"    => array(
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => "Logo Client",
         "param_name" => "gallery",
         "value" => "",
         "description" => __("Logos", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Visible Logo",
         "param_name" => "visible",
         "value" => array(
                     __('Select Visible', 'archi') => '',

                     __('4 items', 'archi') => '4',

                     __('5 items', 'archi') => '5',

                     __('6 items', 'archi') => '6', 

                     
                     
                    ),
         "description" => __("Number visible", 'archi')
      ), 
      
    )));
}



//Our Team

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Our Team", 'archi'),
   "base" => "team",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Photo Member",
         "param_name" => "photo",
         "value" => "",
         "description" => __("Avarta of member, Recomended Size: 420 x 420", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Name", 'archi'),
         "param_name" => "name",
         "value" => "",
         "description" => __("Member's Name", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Job", 'archi'),
         "param_name" => "job",
         "value" => "",
         "description" => __("Member's job.", 'archi')
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => "Description",
         "param_name" => "content",
         "value" => "",
         "description" => __("Description", 'archi')
      ), 
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Icon 1", 'archi'),
         "param_name"=> "icon1",
         "value"     => "",
         "description" => __("EX: twitter, facebook, skype...Find here: <a target='_blank' href='http://fontawesome.io/icons/'>http://fontawesome.io/icons/</a>", 'archi')
      ),
     array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => "Url 1",
         "param_name"=> "url1",
         "value"     => "",
         "description" => __("Url.", 'archi')
      ),
     array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Icon 2", 'archi'),
         "param_name"=> "icon2",
         "value"     => "",
         "description" => __("EX: twitter, facebook, skype...Find here: <a target='_blank' href='http://fontawesome.io/icons/'>http://fontawesome.io/icons/</a>", 'archi')
      ),
     array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => "Url 2",
         "param_name"=> "url2",
         "value"     => "",
         "description" => __("Url.", 'archi')
      ),
     array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Icon 3", 'archi'),
         "param_name"=> "icon3",
         "value"     => "",
         "description" => __("EX: twitter, facebook, skype...Find here: <a target='_blank' href='http://fontawesome.io/icons/'>http://fontawesome.io/icons/</a>", 'archi')
      ),
     array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => "Url 3",
         "param_name"=> "url3",
         "value"     => "",
         "description" => __("Url.", 'archi')
      ),
     array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Icon 4", 'archi'),
         "param_name"=> "icon4",
         "value"     => "",
         "description" => __("EX: twitter, facebook, skype...Find here: <a target='_blank' href='http://fontawesome.io/icons/'>http://fontawesome.io/icons/</a>", 'archi')
      ),
     array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => "Url 4",
         "param_name"=> "url4",
         "value"     => "",
         "description" => __("Url.", 'archi')
      ),
    )));
}



// Testimonial Slider

if(function_exists('vc_map')){
   
   vc_map( array(
   "name" => __("OT Testimonial Silder", 'archi'),
   "base" => "testslide",
   "class" => "",
   "category" => 'Content',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Visible Testimonial",
         "param_name" => "visible",
         "value" => array(
                     __('Select Visible', 'archi') => '',

                     __('1 Col', 'archi') => '1',

                     __('2 Cols', 'archi') => '2',

                     __('3 Cols', 'archi') => '3', 

                     __('4 Cols', 'archi') => '4',
                     
                    ),
         "description" => __("Description", 'archi')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number Testimonial",
         "param_name" => "number",
         "value" => "",
         "description" => __("Number", 'archi')
      ),    
          
    )
    ));
}


// Process

if(function_exists('vc_map')){
   
   vc_map( array(
   "name" => __("OT Process", 'archi'),
   "base" => "process",
   "class" => "",
   "category" => 'Content',
   "icon" => "icon-st",
   "params" => array(
      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number Process",
         "param_name" => "number",
         "value" => "",
         "description" => __("Number", 'archi')
      ),    
          
    )
    ));
}

// Latest Blog

if(function_exists('vc_map')){
   
   vc_map( array(
   "name" => __("OT Latest Blog Silder", 'archi'),
   "base" => "latestblog",
   "class" => "",
   "category" => 'Content',
   "icon" => "icon-st",
   "params" => array(
      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number Show",
         "param_name" => "number",
         "value" => "",
         "description" => __("Number", 'archi')
      ),    
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number Excerpt",
         "param_name" => "excerpt",
         "value" => "",
         "description" => __("Number", 'archi')
      ),      
    )
    ));
}

// Pricing Table
if(function_exists('vc_map')){
	vc_map( array(
   "name" => __($pre_text." Pricing Table", 'archi'),
   "base" => "pricingtable",
   "class" => "",
   "category" => 'Content',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title Pricing", 'archi'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title display in Pricing Table.", 'archi')
      ),
	   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Price Pricing", 'archi'),
         "param_name" => "price",
         "value" => "",
         "description" => __("Price display in Pricing Table.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Per Time", 'archi'),
         "param_name" => "time",
         "value" => "",
         "description" => __("Price per time in Pricing Table.", 'archi')
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Detail Pricing", 'archi'),
         "param_name" => "content",
         "value" => "",
         "description" => __("Content Pricing Table.", 'archi')
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Label Button", 'archi'),
         "param_name" => "btntext",
         "value" => "",
         "description" => __("Text display in button.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link Button", 'archi'),
         "param_name" => "btnlink",
         "value" => "",
         "description" => __("Link in button.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Table Width (%)", 'archi'),
         "param_name" => "width",
         "value" => "",
         "description" => __("Style width Pricing Table. Ex: 4 columns - 25%, 5 columns: 20%, 3 columns: 33.33%.", 'archi')
      ),
	   array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Featured Pricing?", 'archi'),
         "param_name" => "featured",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Featured Pricing.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Style Table", 'archi'),
         "param_name" => "style",
         "value" => array(   
                     __('Style 1: Light', 'archi') => 'light',
                     __('Style 2: Dark', 'archi') => 'dark',
                    ),
         "description" => __("Select Style Pricing Tables", 'archi')
      ),
    )));
}


//Google Map

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Google Map", 'archi'),
   "base" => "ggmap",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(  
      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Height Map", 'archi'),
         "param_name" => "height",
         "value" => 320,
         "description" => __("Please enter number height Map, 300, 350, 380, ..etc. Default: 420.", 'archi')
      ),    
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Latitude", 'archi'),
         "param_name" => "lat",
         "value" => -6.373091,
         "description" => __("Please enter <a href='http://www.latlong.net/'>Latitude</a> google map", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Longitude", 'archi'),
         "param_name" => "long",
         "value" => 106.835175,
         "description" => __("Please enter <a href='http://www.latlong.net/'>Longitude</a> google map", 'archi')

      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Zoom Map", 'archi'),
         "param_name" => "zoom",
         "value" => 15,
         "description" => __("Please enter Zoom Map, Default: 15", 'archi')
      ),
    
       
    array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Icon Map marker",
         "param_name" => "icon",
         "value" => "",
         "description" => __("Icon Map marker, 85 x 85", 'archi')
      ),  
       
    )));

}
 ?>