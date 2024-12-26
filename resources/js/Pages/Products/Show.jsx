import { Link } from '@inertiajs/react';  

export default function Show({ product }) {  
    return (  
        
    <div className='bg-blue-400 bg-show'>
        <div className='cart-show'>  
            <div className='cart-in'>
                <div className='text-show'>
                    <h1>{product.name}</h1>  
                    <hr />
                    <p>{product.description}</p>  
                    <p className='price-show'>Price: ${product.price.toFixed(2)}</p>
                    
                    <Link href="/products" className='link-back inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10'>
                    Back </Link>

                </div>
                <img src={product.imageSrc} alt={product.name} className="product-image" />
                
            </div>
        </div>  
    </div>    
    );  
}