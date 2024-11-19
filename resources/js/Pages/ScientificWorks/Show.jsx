import ReviewQuality from "@/Components/ReviewQuality";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, Link } from "@inertiajs/react";
import { Rating } from 'react-simple-star-rating'


export default function Index(sciWorkData) {

	const tableRowHeadClass = "align-top text-right pr-4 font-semibold text-gray-500";

	console.log(sciWorkData);

	const hasReviews = sciWorkData.reviews && sciWorkData.reviews.length > 0;

	const avg = hasReviews ? (sciWorkData.reviews.reduce(
		(accumulator, currentValue) => accumulator + currentValue.assessment, 0
	) / sciWorkData.reviews.length).toFixed(1) : 0;

	return (
		<AuthenticatedLayout 
			header={
				<h2 className="text-2xl font-semibold leading-tight text-gray-800 dark:text-gray-200 text-center">
					{sciWorkData.title}
				</h2>
			}
		>
			<Head title="Scientific Work" />

			<div className="py-8">
				<div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
					<div className="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
						<div className="p-6 text-gray-900 dark:text-gray-100 flex flex-wrap justify-center">

							<div className="w-full max-w-3xl mx-auto flex flex-col sm:flex-row items-center">
								

								<div className="mb-4 sm:mb-0">
								
									<Link href={sciWorkData.file} target="_blank" rel="noopener noreferrer" >
										<img src="/images/pdf_image.png" alt="PDF" style={{ maxWidth: '150px' }}/>
										<p className="text-center mt-2">Click to PDF</p>
									</Link>

								</div>

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
											<tr>
												<td className={ tableRowHeadClass } >RATING:</td>
												<td>{avg} &nbsp; <Rating readonly={true} initialValue={ avg } stars={5} allowFraction={true} size={20} /></td>
											</tr>
										</tbody>
									</table>
							
								</div>
								
							</div>
							
						</div>
								
					</div>
					
					<br />

					<div className="pt-6 overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
						
							<h3 className="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200 text-center">
								Reviews
							</h3>
							
							{ hasReviews ? (
								<div className="p-6 text-gray-900 dark:text-gray-100">
								<div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
									{ sciWorkData.reviews.map((review, index) => (

										<div key={index} className="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg shadow-md">
											<table className="table-auto w-full">
												<tbody>
													<tr>
														<td className={ tableRowHeadClass } >REVIEWER:</td>
														<td>{review.user}</td>
														<td className="align-top" rowSpan="3" width="33%"><ReviewQuality /></td>
													</tr>
													<tr>
														<td className={ tableRowHeadClass } >ASSESSMENT:</td>
														<td>{review.assessment}</td>
													</tr>
													<tr>
														<td className={ tableRowHeadClass } >RECOMMEND:</td>
														<td>{review.recommend ? 'Yes' : 'No'}</td>
													</tr>
													<tr>
														<td className={ tableRowHeadClass } >REVIEW:</td>
														<td colSpan="2">{review.review}</td>
													</tr>
												</tbody>
											</table>
										</div>
									))}
								</div>
								</div>
							) : (
								<p className="text-xl mt-4 text-center font-semibold leading-tight text-gray-800 dark:text-gray-200">No reviews available.</p>
							)}

						</div>
					</div>
				</div>

		</AuthenticatedLayout>
	)
}