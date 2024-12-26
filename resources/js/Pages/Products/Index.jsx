import { Link } from '@inertiajs/react';

export default function Index({ products }) {   
    return (  
        
        <>  
            <div className="bg-blue-400 prod-con">  {/*ส่วนของรูปภาพของ products */}
                <div className="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8 bg-white">
                    <h2 className="text-2xl font-bold tracking-tight text-gray-900">Electronic Products</h2>
                    <hr className="hr-top" />
                    <div className="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                        {products.map((product) => (
                            <div key={product.id} className="group relative bg-gray-100">
                                {/* ใช้ลิงก์ที่เชื่อมไปยังหน้ารายละเอียดของผลิตภัณฑ์ */}
                                <Link href={product.href}>
                                    <img
                                        alt={product.name}
                                        src={product.imageSrc}
                                        className="cursor-pointer aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80"
                                    />
                                </Link>

                                <div className="mt-4 flex justify-between"> {/*ส่วนของเนื้อหาใต้ภาพของ products */}
                                    <div>
                                        <h3 className="text-sm text-gray-700">
                                            {/* ใช้ลิงก์ที่เชื่อมไปยังหน้ารายละเอียดของผลิตภัณฑ์ */}
                                            <Link href={product.href}>
                                                <span aria-hidden="true" className="absolute inset-0" />
                                                {product.name}
                                            </Link>
                                        </h3>
                                        <p className="mt-1 text-sm text-gray-500">{product.description}</p>
                                    </div>
                                    <p className="text-sm font-medium text-gray-900">${product.price}</p>
                                </div>
                            </div>
                        ))}
                    </div>
                </div>
            </div>

        </>  
    );  
}