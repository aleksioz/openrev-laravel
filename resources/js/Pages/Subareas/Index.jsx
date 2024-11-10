import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head } from "@inertiajs/react";

export default function Index(subarea) {

	return (
		<AuthenticatedLayout 
			header={
				<h2 className="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
					Areas
				</h2>
			}
		>
			<Head title="All subareas" />

			<div className="py-12">
				<div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
					<div className="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
						<div className="p-6 text-gray-900 dark:text-gray-100 flex flex-wrap justify-center">

							{
								console.log(subarea)
								
							}

								{ // JSON.stringify(scientificworks, undefined, 2) 
								}
							
						</div>
					</div>
				</div>
			</div>

		</AuthenticatedLayout>
	)
}