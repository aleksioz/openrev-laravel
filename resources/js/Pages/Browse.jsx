import ScientificWork from '@/Components/ScientificWork';
import SmallAuthorCard from '@/Components/SmallAuthorCard';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';

import { Head } from '@inertiajs/react';

export default function Dashboard({title, data, type}) {
    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                    {title}
                </h2>
            }
        >
            <Head title="Seminar Works" />

            <div className="py-8 text-center">
				<div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
					<div className="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
						<div className="p-6 text-gray-900 dark:text-gray-100 flex flex-wrap justify-center">

                                {
                                    type == 'work' ?
                                        data.map( (scientificwork ) => ( 
                                            <ScientificWork 
                                                title={scientificwork.title} 
                                                author={scientificwork.author} 
                                                info={scientificwork.info}
                                                key={scientificwork.id}
                                                id={scientificwork.id}
                                                className="mr-4 mt-4"
                                            />
                                        )) 
                                    : // type == 'user'
                                        data.map( (card) => ( 
                                            <SmallAuthorCard 
                                                author={card.name} 
                                                info_title={card.info_title}
                                                info={card.info}
                                                key={card.id}
                                                id={card.id}
                                                className="mr-4 mt-4"
                                            />
                                        ))                              
                                }                            
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
