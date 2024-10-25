export default function ScientificWork({
	title='Title', 
	author='Author', 
	info='Info',
	className=''
}) {
	return (
		<div className={`bg-white shadow-md rounded-lg p-6 text-center w-72 ${className}` }>
			<h2 className="text-xl text-black font-bold mb-4">{title}</h2>
			<p className="text-gray-700 mb-4">{author}</p>
			<div className="text-gray-600 border-t-2">
				<p>{info}</p>
			</div>
		</div>
	)
}