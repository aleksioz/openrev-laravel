import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, Link } from "@inertiajs/react";

export default function Index(sciWorkData) {

	const tableRowHeadClass = "align-top text-right pr-4 font-semibold text-gray-500";

	return (
		<AuthenticatedLayout 
			header={
				<h2 className="text-2xl font-semibold leading-tight text-gray-800 dark:text-gray-200 text-center">
					{sciWorkData.title}
				</h2>
			}
		>
			<Head title="Scientific Work" />

			<div className="py-12">
				<div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
					<div className="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
						<div className="p-6 text-gray-900 dark:text-gray-100 flex flex-wrap justify-center">

							<div className="w-full max-w-3xl mx-auto flex flex-col sm:flex-row items-center">
								
								<Link href={sciWorkData.file} target="_blank" rel="noopener noreferrer" className="mb-4 sm:mb-0" >
									<img src="/images/pdf_image.png" alt="PDF" style={{ maxWidth: '150px' }}/>
									<p className="text-center mt-2">Click to PDF</p>
								</Link>

								<div className="sm:ml-4 flex items-center">
									<table className="table-auto">
										<tbody>
											<tr>
												<td className={ tableRowHeadClass } >AUTHOR:</td>
												<td>{sciWorkData.author}</td>
											</tr>
											<tr>
												<td className={ tableRowHeadClass } ><span>ABSTRACT:</span></td>
												<td>{sciWorkData.abstract}</td>
											</tr>
											<tr>
												<td className={ tableRowHeadClass } >KEYWORDS:</td>
												<td>{sciWorkData.keywords}</td>
											</tr>
											<tr>
												<td className={ tableRowHeadClass } >CATEGORY:</td>
												<td>{sciWorkData.category}</td>
											</tr>
											<tr>
												<td className={ tableRowHeadClass } >PUBLISHED:</td>
												<td>{sciWorkData.publishDate}</td>
											</tr>
										</tbody>
									</table>
							
								</div>
								
							</div>
							
						</div>
								
					</div>
				</div>
			</div>

		</AuthenticatedLayout>
	)
}