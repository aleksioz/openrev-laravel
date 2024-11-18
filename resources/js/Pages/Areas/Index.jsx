import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head } from "@inertiajs/react";
import ScientificWork from "@/Components/ScientificWork";
import { all } from "axios";


export default function Index(allData) {

	return (
		<AuthenticatedLayout 
			header={
				<h2 className="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
					{allData.area.name}
				</h2>
			}
		>
			<Head title="All areas" />

			<div className="py-8">
				<div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
					<div className="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
						<div className="p-6 text-gray-900 dark:text-gray-100 flex flex-wrap justify-center">

							{
								allData.all.data.map( (scientificwork ) => ( 
									<ScientificWork 
										title={scientificwork.title} 
										author={scientificwork.author} 
										info={scientificwork.info}
										key={scientificwork.id}
										id={scientificwork.id}
										className="mr-4 mt-4"
									/>
								))	
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