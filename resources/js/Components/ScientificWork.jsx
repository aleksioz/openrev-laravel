import React from 'react';
import { Link } from '@inertiajs/react';

export default function ScientificWork({
	title='Title', 
	author='Author', 
	info='Info',
	className='', 
	id=''
}) {
	return (
		<div className={`bg-white shadow-md rounded-lg text-center w-72 ${className}` }>
			<h2 className="text-xl text-black font-bold mb-4 m-6">
				<Link href={ route('scientificwork.show', id) }>{title}</Link>
			</h2>
			<p className="text-gray-700 mb-4">{author}</p>
			<div className="bg-gray-200 rounded-lg text-gray-600 border-t-2">
				<p>Published:</p>
				<p>{info}</p>
			</div>
		</div>
	)
}