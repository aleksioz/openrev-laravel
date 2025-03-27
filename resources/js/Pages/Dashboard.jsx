import ScientificWork from '@/Components/ScientificWork';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';

import { Head } from '@inertiajs/react';

export default function Dashboard() {
    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                    Dashboarda
                </h2>
            }
        >
            <Head title="Seminar Works" />

            <div className="py-8">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
                        <div className="p-6 text-gray-900 dark:text-gray-100">
                           
                            <div className="mb-6 text-center">
                                <h3 className="text-lg font-medium text-gray-800 dark:text-gray-200">
                                    Filtered by most popular
                                </h3>
                                <div className="flex justify-center gap-4 mt-4">
                                    <ScientificWork />
                                    <ScientificWork />
                                    <ScientificWork />
                                </div>
                            </div>
                            
                            <div className="text-center">
                                <h3 className="text-lg font-medium text-gray-800 dark:text-gray-200">
                                    Filtered by most recent
                                </h3>
                                <div className="flex justify-center gap-4 mt-4">
                                    <ScientificWork />
                                    <ScientificWork />
                                    <ScientificWork />
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
