@extends('website.layout.main')

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    /* --- Tree Container --- */
    .sitemap-container {
        width: 100%;
        padding: 50px 0;
        overflow-x: auto; /* Allows scrolling on small screens */
        text-align: center;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .sitemap-header {
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 40px;
        color: #333;
    }

    /* --- CSS Tree Logic --- */
    .tree ul {
        padding-top: 20px;
        position: relative;
        transition: all 0.5s;
        display: flex;
        justify-content: center;
        padding-left: 0;
    }

    .tree li {
        float: left;
        text-align: center;
        list-style-type: none;
        position: relative;
        padding: 20px 5px 0 5px;
        transition: all 0.5s;
    }

    /* Drawing the lines */
    .tree li::before, .tree li::after {
        content: '';
        position: absolute;
        top: 0;
        right: 50%;
        border-top: 1px solid #ccc;
        width: 50%;
        height: 20px;
    }

    .tree li::after {
        right: auto;
        left: 50%;
        border-left: 1px solid #ccc;
    }

    /* Remove connectors from root/single items */
    .tree li:only-child::after, .tree li:only-child::before {
        display: none;
    }
    .tree li:only-child {
        padding-top: 0;
    }

    /* Remove connectors from first and last children to create the curve */
    .tree li:first-child::before, .tree li:last-child::after {
        border: 0 none;
    }

    /* Add vertical line back to last child */
    .tree li:last-child::before {
        border-right: 1px solid #ccc;
        border-radius: 0 5px 0 0;
    }
    .tree li:first-child::after {
        border-radius: 5px 0 0 0;
    }

    /* Downward connector from parent */
    .tree ul ul::before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        border-left: 1px solid #ccc;
        width: 0;
        height: 20px;
    }

    /* --- The Node Styling (The Boxes) --- */
    .tree .node {
        display: inline-block;
        border: 1px solid #ccc;
        padding: 10px 20px;
        text-decoration: none;
        color: #333;
        font-size: 14px;
        background: white;
        border-radius: 50px; /* Pill shape for headers */
        min-width: 120px;
        position: relative;
        z-index: 2;
    }

    .tree .sub-node {
        border-radius: 15px; /* Rectangle with radius for list items */
        padding: 8px 15px;
        margin-top: 5px;
        display: block;
        background: white;
        border: 1px solid #eee;
        margin-bottom: 8px;
        font-size: 13px;
    }

    /* A vertical stack for the sub-menus (Categories, Products, etc) */
    .vertical-stack {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    /* Remove standard tree lines for the vertical stack internal items */
    .vertical-stack .sub-node {
        position: relative;
    }
    
    /* --- Specific Color Themes (Matching Image) --- */
    
    /* Root (Homepage) */
    .theme-root { background-color: #f0fcfc; border-color: #a0dada !important; color: #333; }

    /* Shop - Orange */
    .theme-orange { background-color: #fff8e1; border-color: #ffe082 !important; }
    .theme-orange-light { background-color: #fffbf0; border-color: #ffe082 !important; }

    /* Blog - Green */
    .theme-green { background-color: #e8f5e9; border-color: #a5d6a7 !important; }
    .theme-green-light { background-color: #f1f8f6; border-color: #a5d6a7 !important; }

    /* About - Red */
    .theme-red { background-color: #ffebee; border-color: #ef9a9a !important; }
    .theme-red-light { background-color: #fff5f6; border-color: #ef9a9a !important; }

    /* Contact - Yellow */
    .theme-yellow { background-color: #fffde7; border-color: #fff59d !important; }
    .theme-yellow-light { background-color: #fffeec; border-color: #fff59d !important; }

    /* Profile - Purple */
    .theme-purple { background-color: #f3e5f5; border-color: #ce93d8 !important; }
    .theme-purple-light { background-color: #faf5fb; border-color: #ce93d8 !important; }

    /* Policies - Teal/Cyan */
    .theme-cyan { background-color: #e0f7fa; border-color: #80deea !important; }
    .theme-cyan-light { background-color: #eafbfd; border-color: #80deea !important; }

    /* Support - Blue/Indigo */
    .theme-indigo { background-color: #e8eaf6; border-color: #9fa8da !important; }
    .theme-indigo-light { background-color: #f2f4fb; border-color: #9fa8da !important; }


    /* --- Icons --- */
    .node i { margin-right: 8px; color: #555; opacity: 0.7; }

</style>
@endpush

@section('content')

<div class="container">
    <div class="sitemap-container">
        <h2 class="sitemap-header">SoftStyle Sitemap</h2>

        <div class="tree">
            <ul>
                <li>
                    <span class="node theme-root">
                        <i class="fa fa-home"></i> Homepage
                    </span>
                    
                    <ul>
                        
                        <li>
                            <span class="node theme-orange">
                                <i class="fa fa-shopping-bag"></i> Shop
                            </span>
                            <ul>
                                <li>
                                    <div class="vertical-stack">
                                        <span class="sub-node theme-orange-light">Categories</span>
                                        <span class="sub-node theme-orange-light">Products</span>
                                        <span class="sub-node theme-orange-light">Single Product</span>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <span class="node theme-green">
                                <i class="fa fa-file-alt"></i> Blog
                            </span>
                            <ul>
                                <li>
                                    <div class="vertical-stack">
                                        <span class="sub-node theme-green-light">Blog List</span>
                                        <span class="sub-node theme-green-light">Single Blog</span>
                                        
                                        <div style="margin-top: 20px; position: relative;">
                                             <div style="height: 20px; width: 1px; background: #ccc; margin: 0 auto;"></div>
                                            
                                            <span class="node theme-cyan" style="margin-top: 0px;">
                                                <i class="fa fa-shield-alt"></i> Policies
                                            </span>
                                            <div style="margin-top:10px;">
                                                <span class="sub-node theme-cyan-light">Privacy Policy</span>
                                                <span class="sub-node theme-cyan-light">Terms & Conditions</span>
                                                <span class="sub-node theme-cyan-light">Refund & Return</span>
                                                <span class="sub-node theme-cyan-light">Security Policy</span>
                                                <span class="sub-node theme-cyan-light">Buying Policy</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <span class="node theme-red">
                                <i class="fa fa-id-card"></i> About
                            </span>
                            <ul>
                                <li>
                                    <div class="vertical-stack">
                                        <span class="sub-node theme-red-light">About Company</span>
                                        <span class="sub-node theme-red-light">Business With Us</span>
                                        <span class="sub-node theme-red-light">Bulk Orders</span>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <span class="node theme-yellow">
                                <i class="fa fa-phone"></i> Contact
                            </span>
                            <ul>
                                <li>
                                    <div class="vertical-stack">
                                        <span class="sub-node theme-yellow-light">Contact Us</span>
                                        <span class="sub-node theme-yellow-light">How To Order</span>

                                        <div style="margin-top: 20px; position: relative;">
                                            <div style="height: 20px; width: 1px; background: #ccc; margin: 0 auto;"></div>
                                           
                                           <span class="node theme-indigo" style="margin-top: 0px;">
                                               <i class="fa fa-headset"></i> Support
                                           </span>
                                           <div style="margin-top:10px;">
                                               <span class="sub-node theme-indigo-light">FAQ</span>
                                               <span class="sub-node theme-indigo-light">Careers</span>
                                               <span class="sub-node theme-indigo-light">Store Location</span>
                                           </div>
                                       </div>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <span class="node theme-purple">
                                <i class="fa fa-user"></i> Profile
                            </span>
                            <ul>
                                <li>
                                    <div class="vertical-stack">
                                        <span class="sub-node theme-purple-light">Manage Account</span>
                                        <span class="sub-node theme-purple-light">Wishlist</span>
                                        <span class="sub-node theme-purple-light">Track Order</span>
                                        <span class="sub-node theme-purple-light">Reviews</span>
                                    </div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<section class="newsletter">
    @include('website.component.newsletter')
</section>

@endsection

@push('scripts')
<script>
    // No scripts needed for pure CSS tree
</script>
@endpush