import ScientificWork from "@/Components/ScientificWork";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head } from "@inertiajs/react";

export default function Index(scientificwork) {

	return (
		<AuthenticatedLayout 
			header={
				<h2 className="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
					Scientific Works
				</h2>
			}
		>
			<Head title="Scientific Works" />

			<div className="py-12">
				<div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
					<div className="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
						<div className="p-6 text-gray-900 dark:text-gray-100 flex flex-wrap justify-center">

							{
								console.log(scientificwork)	
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