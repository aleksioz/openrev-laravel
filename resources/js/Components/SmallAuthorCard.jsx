import React from 'react';
import { Link } from '@inertiajs/react';

export default function SmallAuthorCard({
	author='Author', 
	info_title='Info Title',
	info='Info',
	className='', 
	id=''
}) {
	return (
		<div className={`bg-white shadow-md rounded-lg text-center w-72 ${className}` }>
			<h2 className="text-xl text-black font-bold mb-4 m-6">
				<Link href={ route('dashboard') }>{author}</Link>
			</h2>
			<div className="bg-gray-200 rounded-lg text-gray-600 border-t-2">
				<p>{info_title}:{info}</p>
			</div>
		</div>
	)
}