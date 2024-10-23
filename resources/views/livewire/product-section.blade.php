<div class='px-10 md:px-20 sm:px-30 py-3'>
         <!-- Brand New  -->
        @include('components.navigation.view-all',[
            'Category' => 'Brand New'
        ])
        <livewire:product-listing :category_id="0" :current_product_id="0"/>

        <!-- Book  -->
        @include('components.navigation.view-all',[
            'Category' => 'Book'
        ])
        <livewire:product-listing :category_id="1" :current_product_id="0"/>

        <!-- Beauty  -->
        @include('components.navigation.view-all',[
            'Category' => 'Beauty'
        ])
        <livewire:product-listing :category_id="2" :current_product_id="0"/>

        <!-- Electronic  -->
        @include('components.navigation.view-all',[
            'Category' => 'Electronic'
        ])
        <livewire:product-listing :category_id="3" :current_product_id="0"/>

    </div>