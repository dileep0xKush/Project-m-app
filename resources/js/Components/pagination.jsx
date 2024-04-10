import { Link } from "@inertiajs/react";

export default function Pagination({ links }) {
    return (
        <nav className="text-center mt-4">
            {links.map((link, index) => (
                <Link
                    preserveScroll
                    key={index}
                    href={link.url}
                    className={`inline-block py-2 px-2 rounded-lg text-grey-200 text-xs ${link.active ? "bg-gray-950" : ""} ${!link.url ? "!text-gray-500 cursor-not-allowed" : "hover:bg-gray-950"}`}
                >
                    <span dangerouslySetInnerHTML={{ __html: link.label }} />
                </Link>
            ))}
        </nav>
    );
}
