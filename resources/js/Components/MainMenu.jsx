import Dropdown from "./Dropdown";
import { usePage } from '@inertiajs/react';

export default function MainMenu() {

	const areas = usePage().props.areas;
	const pathname = usePage().url;

	return (
		<div className="hidden sm:ms-6 sm:flex sm:items-center">
			<div className="relative ms-3">
				<Dropdown>
					<Dropdown.Trigger>
						<span className="inline-flex rounded-md">
							<button
								type="button"
								className="inline-flex items-center rounded-md border border-transparent bg-white px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:outline-none dark:bg-gray-800 dark:text-gray-400 dark:hover:text-gray-300"
							>
								<svg
									className="h-6 w-6"
									xmlns="http://www.w3.org/2000/svg"
									fill="none"
									viewBox="0 0 24 24"
									stroke="currentColor"
								>
									<path
										strokeLinecap="round"
										strokeLinejoin="round"
										strokeWidth="2"
										d="M4 6h16M4 12h16m-7 6h7"
									/>
								</svg>

								<svg
									className="-me-0.5 ms-2 h-4 w-4"
									xmlns="http://www.w3.org/2000/svg"
									viewBox="0 0 20 20"
									fill="currentColor"
								>
									<path
										fillRule="evenodd"
										d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
										clipRule="evenodd"
									/>
								</svg>
							</button>
						</span>
					</Dropdown.Trigger>

					<Dropdown.Content>
						
						<span className="pl-4 text-gray-900 dark:text-gray-100">Browse</span>
						<Dropdown.Link
							href={route('ordered-works')}
							key={0}
							className={route('ordered-works').includes(pathname) ? 'pl-6 bg-violet-700' : 'pl-6'}
						>
							Ordered Works
						</Dropdown.Link>
						<Dropdown.Link
							href={route('top-reviewers')}
							key={1}
							className={route('top-reviewers').includes(pathname) ? 'pl-6 bg-violet-700' : 'pl-6'}
						>
							Top Reviewers
						</Dropdown.Link>
						<Dropdown.Link
							href={route('top-authors')}
							key={2}
							className={route('top-authors').includes(pathname) ? 'pl-6 bg-violet-700' : 'pl-6'}
						>
							Top authors
						</Dropdown.Link>

						{
							areas.map((area, index) => (
								<div key={index}>
									<Dropdown.Link 
										href={route('area.show', area.id)}
										key={50+index}
										className={route('area.show', area.id).includes(pathname) ? 'bg-violet-700' : ''}
									>
										{area.name}										
									</Dropdown.Link>
									
									{
										area.subareas.map((subarea, index) => (
											<Dropdown.Link 
												href={route('subarea.show', subarea.id)}
												key={100+index}
												className={route('subarea.show', subarea.id).includes(pathname) ? 'pl-6 bg-violet-700' : 'pl-6'}
											>
												{subarea.name}
											</Dropdown.Link>
										))
									}
								</div>
							))
						}
						
					</Dropdown.Content>
				</Dropdown>
			</div>
		</div>
	)
}